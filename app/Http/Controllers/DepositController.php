<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index(){
        $currencies = Currency::all();
        return view('deposit', compact('currencies'));
    }

    public function store(Request $request){
        $request->validate([
            'amount' => ['required', 'numeric', 'min:50'],
            'currency' => ['required', 'exists:currencies,name'],
        ]);

        $currency = Currency::where('name', $request->currency)->firstOrFail();

        $transaction = auth()->user()->wallet->deposit($request->amount, $request->currency, $currency->address);

        return redirect()->route('transactions.show', $transaction->id)->banner('Transaction submitted. Awaiting confirmation');
    }
}
