<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class PageController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->balance()->limit(3)->get();

        return view('admin.page.index', compact('transactions'));
    }
}
