<?php

namespace App\Casts;

use Cknow\Money\Casts\MoneyCast;
use Cknow\Money\Money;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class AmountCast extends MoneyCast
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return $value * 100;
    }

    public function getFormatter(Money $money):void{}
}
