<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login-process');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register-process');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['check_login:customer'])->prefix('/customer')->name('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('.index');
        Route::get('/view-motor/{motor}', [CustomerController::class, 'viewMotor'])->name('.view-motor');
        Route::get('/checkout/{motor}', [CustomerController::class, 'checkoutMotor'])->name('.checkout-motor');
        Route::post('/payment', [CustomerController::class, 'payment'])->name('.payment');
    });

    Route::middleware(['check_login:dealer'])->prefix('/dealer')->name('dealer')->group(function () {
        Route::get('/', [DealerController::class, 'index'])->name('.index');
    });
});