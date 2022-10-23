<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;

    const SATUSES = ['pending' => 0, 'verified' => 1];

    protected $guarded = [];

    protected $casts = [
        'data' => 'array'
    ];

    public function isVerified()
    {
        return $this->status == self::SATUSES['verified'];
    }

    public function isPending()
    {
        return $this->status == self::SATUSES['pending'];
    }
}
