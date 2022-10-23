<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();
        // Storage
        return view('admin.currency.index', compact('currencies'));
    }

    public function create()
    {
        return view('admin.currency.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'unique:currencies,name'],
            'address' => ['required'],
            'qr_code' => ['nullable', 'image', 'max:2048', 'exclude']
        ]);

        if ($request->hasFile('qr_code')) {
            $path = $request->file('qr_code')->store('currencies', 'public');
            $data['qr_image_url'] = $path;
        }

        $currency = Currency::make($data);

        if (!$currency->getCurrencyData()) {
            return back()->dangerBanner('Currency data could not be fetched or does not exist');
        }

        $currency->save();

        return to_route('admin.currencies.index')->banner('Currency Added');
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return to_route('admin.currencies.index')->banner('Currency Removed');
    }
}
