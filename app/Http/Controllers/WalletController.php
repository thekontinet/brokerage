<?php

namespace App\Http\Controllers;

class WalletController extends Controller
{
    public function index()
    {
        $wallet = auth()->user()->wallet;
        $transactions = $wallet->transactions()->orderByDesc('id')->paginate(25);

        return view('wallet.index', compact('transactions', 'wallet'));
    }
}
