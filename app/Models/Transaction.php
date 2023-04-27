<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    const STATUS_PENDING = 0;

    const STATUS_SUCCESS = 1;

    const STATUS_REJECTED = -1;

    protected $guarded = [];

    protected $casts = [
        'meta' => 'array',
        'status' => 'integer',
    ];

    public function addMeta($key, $value = null)
    {
        if (! is_array($key)) {
            return $this->addMeta([$key => $value]);
        }
        $this->meta = $this->meta ? [...$this->meta, ...$key] : [...$key];

        return $this->save();
    }

    public function getAddress()
    {
        return $this->meta['address'] ?? null;
    }

    public function isDeposit()
    {
        return $this->type === 'credit';
    }

    public function isCredit()
    {
        return $this->type === 'debit';
    }

    public function isPending()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isSuccess()
    {
        return $this->status === self::STATUS_SUCCESS;
    }

    public function isRejected()
    {
        return $this->status === self::STATUS_REJECTED;
    }

    public function approve()
    {
        $this->status = self::STATUS_SUCCESS;
        $this->save();
    }

    public function getTypeAttribute()
    {
        return $this->amount >= 0 ? 'credit' : 'debit';
    }

    public function gethashAttribute()
    {
        return md5(serialize($this));
    }

    public function scopePending($query)
    {
        return $query->where('status', static::STATUS_PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', static::STATUS_SUCCESS);
    }

    public function scopeBalance($query)
    {
        return $query->where('group', Wallet::GROUP_BALANCE);
    }

    public function scopeProfit($query)
    {
        return $query->where('group', Wallet::GROUP_PROFIT);
    }

    public function scopeBonus($query)
    {
        return $query->where('group', Wallet::GROUP_BONUS);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function asset()
    {
        return $this->belongsTo(Currency::class, 'currency', 'name');
    }
}
