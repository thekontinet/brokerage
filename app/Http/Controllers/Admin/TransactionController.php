<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::paginate(25);

        return view('admin.transaction.index', compact('transactions'));
    }

    public function show($wallet_id)
    {
        $wallet = Wallet::findOrFail($wallet_id);
        $transactions = $wallet->transactions()->paginate(15);

        return view('admin.transaction.index', compact('transactions'));
    }

    public function edit(Transaction $transaction)
    {
        return view('admin.transaction.show', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'action' => ['required', 'in:approve,cancel,delete'],
        ]);

        $actions = [
            'approve' => Transaction::STATUS_SUCCESS,
            'cancel' => Transaction::STATUS_REJECTED,
        ];

        if ($request->action === 'delete') {
            return $this->destroy($transaction);
        }

        $transaction->status = $actions[$request->action];
        $transaction->save();

        return back()->banner('Transaction status updated successfully');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return to_route('admin.wallets.show', $transaction->wallet->id)->banner('Transaction eliminated');
    }
}
