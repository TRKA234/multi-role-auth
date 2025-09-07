<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', function () {
    return view('dashboards.admin');
})->middleware(\App\Http\Middleware\EnsureAdmin::class)->name('admin.dashboard');

Route::get('/owner/dashboard', function () {
    return view('dashboards.owner');
})->middleware(\App\Http\Middleware\EnsureOwner::class)->name('owner.dashboard');

Route::get('/customer/dashboard', function () {
    return view('dashboards.customer');
})->middleware(\App\Http\Middleware\EnsureCustomer::class)->name('customer.dashboard');
