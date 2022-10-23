<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Wallet;
use Exception;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index()
    {
        return view('transfer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:50'],
            'from' => [
                'required',
                "in:" . Wallet::GROUP_BONUS . ',' . Wallet::GROUP_PROFIT
            ],
        ]);

        if (Investment::walletHasActiveSubscriptions((auth()->user()->wallet))) {
            return redirect()->route('dashboard')->dangerBanner("Profit can only be transfered at the end of your investment");
        }

        try {
            $wallet = auth()->user()->wallet;
            $transaction = $wallet->transfer($request->amount, $request->from);
            $message = format_as_money($transaction->amount) . ' has been transfered to your balance';
            return redirect()->route('dashboard')->banner($message);
        } catch (\App\Exceptions\WalletException $e) {
            return redirect()->back()->banner($e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->dangerBanner('Transaction failed. Please try again.');
        }
    }
}
