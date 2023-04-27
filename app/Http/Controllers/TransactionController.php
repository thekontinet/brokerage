<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function show($id)
    {
        $wallet = auth()->user()->wallet;
        $transaction = $wallet->transactions()->findOrFail($id);

        return view('transaction.show', compact('transaction'));
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return to_route('dashboard')->banner('Transaction canceled');
    }
}
