<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Investment extends Model
{
    use HasFactory;

    const STATUS_PENDING = 0;

    const STATUS_ACTIVE = 1;

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function upgrade(Wallet $wallet, int $amount)
    {
        $totalAmount = $this->amount + $amount;
        $plan = Plan::findByAmountRange($totalAmount);
        if ($plan) {
            $this->plan_id = $plan->id;
        }
        $this->amount = $totalAmount;
        try {
            DB::beginTransaction();
            $wallet->debit($amount)->approve();
            $this->updateNexProfitDate();
            $this->save();
            DB::commit();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function isActive()
    {
        return $this->status == self::STATUS_ACTIVE;
    }

    public static function subscribe(Wallet $wallet, int $amount, $currency = null)
    {
        DB::beginTransaction();
        $plan = Plan::findByAmountRange($amount);
        $wallet->debit($amount)->approve();
        $investment = new static;
        $investment->forceFill([
            'plan_id' => $plan->id,
            'wallet_id' => $wallet->id,
            'currency' => $currency,
            'amount' => $amount,
            'status' => 1,
        ]);

        $investment->updateNexProfitDate();

        $investment->save();
        DB::commit();

        return $investment;
    }

    public function canRecieveProfit()
    {
        return now()->greaterThan($this->updated_at) && $this->status == self::STATUS_ACTIVE;
    }

    public function updateNexProfitDate()
    {
        if ($this->plan->type === 'daily') {
            $this->updated_at = now()->addDays(1);
        }

        if ($this->plan->type === 'weekly') {
            $this->updated_at = now()->addDays(7);
        }

        if ($this->plan->type === 'monthly') {
            $this->updated_at = now()->addDays(31);
        }

        $this->save();
    }

    public function updateProfit()
    {
        try {
            DB::beginTransaction();
            if ($this->canRecieveProfit()) {
                $this->wallet->credit($this->getCalculatedProfit(), null, 'profit')->approve();
                $this->updateNexProfitDate();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public static function getActiveBalance(Wallet $wallet)
    {
        return self::where('wallet_id', $wallet->id)->active()->sum('amount');
    }

    public static function walletHasActiveSubscriptions(Wallet $wallet)
    {
        return $wallet->investment;
    }

    public function getCalculatedProfit()
    {
        return ($this->plan->percentage / 100) * $this->amount;
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
