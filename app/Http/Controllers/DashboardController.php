<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __invoke() {
        format_as_money(100);
        $wallet = auth()->user()->wallet;
        $transactions = $wallet->transactions()->balance()
                            ->orderByDesc('id')
                            ->limit(10)->get();
        return view('dashboard', compact('wallet', 'transactions'));
    }
}
