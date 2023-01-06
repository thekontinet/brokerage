<?php

namespace App\Http\Controllers;

use App\Exceptions\WalletException;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WithdrawController extends Controller
{
    public function index(){
        if(request()->is('withdraw/bank')){
            return view('withdraw.bank');
        }else{
            $currencies = Currency::all();
            return view('withdraw.wallet', compact('currencies'));
        }
    }

    public function store(Request $request){
        $is_bank = $request->has('bank');

        $data = $request->validate([
            'amount' => ['required', 'numeric', 'min:50', 'exclude'],
            'currency' => ['required', $is_bank ? 'string' : 'exists:currencies,name', 'exclude'],
            'address' => [Rule::requiredIf(!$is_bank), Rule::excludeIf($is_bank)],
            'bank' => [Rule::requiredIf($is_bank), Rule::excludeIf(!$is_bank)],
            'account_name' => [Rule::requiredIf($is_bank), Rule::excludeIf(!$is_bank)],
            'account_number' => [Rule::requiredIf($is_bank), Rule::excludeIf(!$is_bank)],
            'iban' => [Rule::excludeIf(!$is_bank)],
            'swift_code' => [Rule::excludeIf(!$is_bank)],
        ]);

        try{
            $transaction = auth()->user()->wallet->withdraw($request->amount, $request->currency);
            $transaction->addMeta($data);
        }catch(WalletException $e){
            return back()->dangerBanner($e->getMessage());
        }

        return redirect()->route('dashboard')->banner('Transaction submitted. Awaiting confirmation');
    }
}
