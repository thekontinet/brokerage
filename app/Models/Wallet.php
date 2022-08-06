<?php

namespace App\Models;

use App\Exceptions\WalletException;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wallet extends Model
{
    use HasFactory;

    const GROUP_BALANCE = 'balance';
    const GROUP_PROFIT = 'profit';
    const GROUP_BONUS = 'bonus';

    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function credit($amount, $currency = null, $group = self::GROUP_BALANCE)
    {
        $currency = $currency ?? 'usd';
        $amount = abs($amount);
        return $this->transactions()->create(compact('amount', 'currency', 'group'));
    }

    public function debit(float $amount, $currency = null, $group = self::GROUP_BALANCE)
    {
        $currency = $currency ?? 'usd';
        $amount = -1 * abs($amount);
        $transaction = $this->transactions()->make(compact('amount', 'currency', 'group'));

        if (abs($transaction->amount) > $this->getBalance($group)) {
            throw WalletException::insufficientFunds();
        }

        $transaction->save();
        return $transaction;
    }

    public function deposit($amount, $currency, string $depositAddress)
    {
        $transaction = $this->credit($amount, $currency);
        $transaction->addMeta('address', $depositAddress);
        return $transaction;
    }

    public function withdraw($amount, $currency)
    {
        return $this->debit($amount, $currency);
    }

    public function transfer($amount, $fromGroup)
    {
        $toGroup = self::GROUP_BALANCE;
        if (!in_array(strtolower($fromGroup), [self::GROUP_BONUS, self::GROUP_PROFIT])) {
            return WalletException::invalidTransfer();
        }

        try {
            DB::beginTransaction();
            $this->debit($amount, null, $fromGroup)->approve();
            $transaction = $this->credit($amount, null, $toGroup);
            $transaction->approve();
            DB::commit();
            return $transaction;
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function getPendingBalance($group = self::GROUP_BALANCE)
    {
        return $this->transactions()->pending()
            ->where('group', $group)->sum('amount');
    }

    public function getBalance($group = self::GROUP_BALANCE)
    {
        return $this->transactions()->approved()
            ->where('group', $group)->sum('amount');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
