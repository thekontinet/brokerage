<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $transactions = Transaction::balance()->limit(3)->get();
        return view('admin.page.index', compact('transactions'));
    }
}
