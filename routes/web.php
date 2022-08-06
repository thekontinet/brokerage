<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('wallet', WalletController::class);
    Route::resource('deposit', DepositController::class);
    Route::resource('withdraw', WithdrawController::class);
    Route::resource('transfer', TransferController::class);
    Route::resource('transactions', TransactionController::class);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])
->prefix('admin')
->name('admin.')
->group(function(){
    Route::get('/', [PageController::class, 'index'])->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/transactions', AdminTransactionController::class)->names('transactions');
});
