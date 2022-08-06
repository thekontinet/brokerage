<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Exception;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index(){
        return view('transfer');
    }

    public function store(Request $request){
        $request->validate([
            'amount' => ['required', 'numeric', 'min:50'],
            'from' => [
                'required',
                "in:" . Wallet::GROUP_BONUS . ',' . Wallet::GROUP_PROFIT
            ],
        ]);

        try {
            $wallet = auth()->user()->wallet;
            $transaction = $wallet->transfer($request->amount, $request->from);
            $message = format_as_money($transaction->amount) . ' has been transfered to your balance';
            return redirect()->route('dashboard')->banner($message);
        } catch (\App\Exceptions\WalletException $e) {
           return redirect()->back()->banner($e->getMessage());
        }catch (Exception $e) {
            return redirect()->back()->banner('Transaction failed. Please try again.');
         }

    }
}
