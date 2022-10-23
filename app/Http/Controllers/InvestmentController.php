<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Investment;
use App\Models\Plan;
use Exception;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function create()
    {
        $currencies = Currency::all();
        $amount = request()->amount ?? 0;
        return view('invest.create', compact('currencies', 'amount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:50'],
        ]);

        try {
            $wallet = auth()->user()->wallet;
            if ($wallet->investment) {
                $wallet->investment->upgrade($wallet, request()->amount);
            } else {
                Investment::subscribe($wallet, request()->amount);
            }
        } catch (Exception $exception) {
            return redirect()->route('dashboard')->dangerBanner('Error: ' . $exception->getMessage());
        }

        return redirect()->route('dashboard')->banner('Investment Successful');
    }
}
