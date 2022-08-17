<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function show(Wallet $wallet){
        return view('admin.wallet.show', compact('wallet'));
    }

    public function update(Request $request, Wallet $wallet){
        $request->validate([
            'amount' => ['required'],
            'group' => ['required', 'in:balance,profit,bonus'],
            'type' => ['required','in:credit,debit']
        ]);

        $amount = abs($request->amount);
        if($request->type == 'debit'){
            $wallet->debit($amount, null, $request->group)->approve();
        }else{
            $wallet->credit($amount, null, $request->group)->approve();
        }

        return back()->banner(ucfirst($request->type) . " Balance has updated");
    }
}
