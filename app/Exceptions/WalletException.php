<?php
namespace App\Exceptions;

use Exception;

class WalletException extends Exception{

    public static function invalidTransfer($message = 'Invalid transaction data'){
        throw new static($message);
    }

    public static function insufficientFunds($message = 'Insufficient funds'){
        return new static($message);
    }
}

