<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();

        return view('withdraw', compact('currencies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:50'],
            'currency' => ['required', 'exists:currencies,name'],
            'address' => ['required'],
        ]);

        $transaction = auth()->user()->wallet->withdraw($request->amount, $request->currency);
        $transaction->addMeta('address', $request->address);

        return redirect()->route('dashboard')->banner('Transaction submitted. Awaiting confirmation');
    }
}
