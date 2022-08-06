<?php

use Cknow\Money\Money;

if(!function_exists('format_as_money')){
    function format_as_money($value, $currency = null){
        $currency = (string) $currency ?? 'USD';
        return Money::parse(abs($value), $currency);
    }
}
