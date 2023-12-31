<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// ====================Register===============
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
// -----------------------------------------------------------------------

Route::get('/placeorder',[OrdersController::class,'index'])->name('placeorder');    
Route::post('/placeorder',[OrdersController::class,'store']);    
Route::get('/latest-orders',[OrdersController::class,'latestOrders'])->name('latest-orders');    
// --------------------------------------------------------
