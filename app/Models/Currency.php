<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCurrencyData($fromCache = true)
    {
        $url = 'https://api.coingecko.com/api/v3/coins/'.$this->name;
        $key = "Currency.{$this->name}";
        if ($fromCache && Cache::has($key)) {
            return Cache::get($key);
        }
        try {
            $response = Http::get('https://api.coingecko.com/api/v3/coins/'.$this->name);
            $data = $response->json();

            if (isset($data['error'])) {
                throw new Exception('Currency not found');
            }

            Cache::forever($key, $data);

            return $data;
        } catch (\Throwable $th) {
            Cache::forget($key);

            return null;
        }
    }

    public function getLogo($size)
    {
        $data = $this->getCurrencyData();

        return $data['image'][$size];
    }
}
