<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = [];

    const DURATIONS = ['daily', 'weekly', 'monthly'];

    protected $casts = [
        'extra' => 'array',
    ];

    public static function findByAmountRange($amount)
    {
        $plan = static::where('price', '<=', $amount)->orderByDesc('price')->first();
        if (! $plan) {
            throw new Exception('No available plan for the specified amount, please increase investment amount and try again.');
        }

        return $plan;
    }
}
