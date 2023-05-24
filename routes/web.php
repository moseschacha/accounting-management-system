<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\receivablesController;
use App\Http\Controllers\payablesController;
use App\Http\Controllers\transactionsController;
use App\Http\Controllers\dashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('clients',ClientController::class);
Route::resource('receivables',receivablesController::class);
Route::resource('payables',payablesController::class);
Route::resource('transactions',transactionsController::class);
Route::resource('dashboard',dashboardController::class);

