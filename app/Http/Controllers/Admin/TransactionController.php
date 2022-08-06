<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('admin.transaction.index', compact('transactions'));
    }

    public function show(Transaction $transaction){
        return view('admin.transaction.show', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction){
        $request->validate([
            'action' => ['required', 'in:approve,cancel,delete']
        ]);

        $actions = [
            'approve' => Transaction::STATUS_SUCCESS,
            'cancel' => Transaction::STATUS_REJECTED,
        ];

        if($request->action === 'delete'){
            return $this->destroy($transaction);
        }

        $transaction->status = $actions[$request->action];
        $transaction->save();

        return back()->banner('Transaction status updated successfully');
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();
        return to_route('admin.transactions.index')->banner('Transaction eliminated');
    }
}
