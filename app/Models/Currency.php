<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCurrencyData($fromCache = true){
        if($fromCache){
            return Cache::rememberForever("Currency.{$this->name}", function(){
                $response = Http::get("https://api.coingecko.com/api/v3/coins/" . $this->name);
                return $response->json();
            });
        }
        $response = Http::get("https://api.coingecko.com/api/v3/coins/" . $this->name);
        $data = $response->json();
        Cache::forever("Currency.{$this->name}", $data);
        return $data;
    }

    public function getLogo($size){
        $data = $this->getCurrencyData();
        return $data['image'][$size];
    }
}
