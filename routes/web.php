<?php

use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\InvestmentController as AdminInvestmentController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WalletController as AdminWalletController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\Admin\KYCController;
use App\Http\Controllers\ImpersonatorController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\PlanController as ControllersPlanController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawController;
use App\Models\Investment;
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

Route::get('affliate/{ref_link}', function ($ref_link) {
    return to_route('register', ['ref' => $ref_link]);
})->name('referrer');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('wallet', WalletController::class)->only('index');
    Route::resource('deposit', DepositController::class)->only(['index', 'store']);
    Route::resource('withdraw', WithdrawController::class)->only(['index', 'store']);
    Route::resource('transfer', TransferController::class)->only('index', 'store');
    Route::resource('transactions', TransactionController::class)->only(['show', 'destroy']);
    Route::resource('/plans', ControllersPlanController::class)->only(['index']);
    Route::resource('/investments', InvestmentController::class);
    Route::resource('/impersonate', ImpersonatorController::class)->only('destroy');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth.admin'
])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('dashboard');
        Route::resource('/users', UserController::class)->only(['index', 'show']);
        Route::resource('/wallets', AdminWalletController::class)->only(['show', 'update']);
        Route::resource('/transactions', AdminTransactionController::class)->except(['store']);
        Route::resource('/currencies', CurrencyController::class)->except('show', 'update');
        Route::resource('/plans', PlanController::class)->except(['show', 'update']);
        Route::resource('/investments', AdminInvestmentController::class)->only(['update']);
        Route::resource('/customer-kyc', KYCController::class)->only(['edit', 'update', 'destroy'])->names('kycs');
        Route::resource('/impersonate', ImpersonatorController::class)->only('store');
    });

//TODO: create impersonate route

//TODO: create a setup route
