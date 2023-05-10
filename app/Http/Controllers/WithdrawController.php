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
        if($request->type == 'bank'){
            $request->validate([
                'type' => ['required'],
                'amount' => ['required', 'numeric', 'min:50'],
                'bank_name' => ['required'],
                'account_name' => ['required'],
                'account_number' => ['required'],
            ]);
        }else{
            $request->validate([
                'type' => ['required'],
                'amount' => ['required', 'numeric', 'min:50'],
                'currency' => ['required', 'exists:currencies,name'],
                'address' => ['required'],
            ]);
        }


        $data['address'] = $request->address;

        if($request->type === 'bank'){
            $data = $request->only(['bank_name', 'account_name', 'account_number']);
        }

        $transaction = auth()->user()->wallet->withdraw($request->amount, $request->currency);
        foreach($data as $key => $value){
            $transaction->addMeta($key, $value);
        }

        return redirect()->route('dashboard')->banner('Transaction submitted. Awaiting confirmation');
    }
}
