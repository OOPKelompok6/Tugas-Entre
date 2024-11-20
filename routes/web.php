<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistryController\{SampleReadController, RegistController, HomeController, StoreController, CartController};

Route::post('/cart/checkout', [CartController::class, "removeAll"])->name('cart.checkout');
Route::post('/cart/removeItem', [CartController::class, "removeItem"])->name('cart.removeItem');
Route::get('/cart', [CartController::class, "setCart"])->name('cart.init');
Route::post('/details', [StoreController::class, "addItemtoGlobalCart"])->name('detailsAdd');
Route::get('/SampleRead', [SampleReadController::class, "ctrNavbar"])->name('SampleRead');
Route::get('/details', [StoreController::class, "setItemDetails"])->name('details');
Route::get('/store', [StoreController::class, "setStore"])->name('store');
Route::get('/profile', function() { $routeCond = true; return view('Profile', ['routeCond' => $routeCond]); })->name('profile');
Route::get('/', [HomeController::class, "ctrNavbar"])->name('home');
Route::get('/homeLogged', [HomeController::class, "ctrNavbar"])->name('homeLogged');
Route::get('/register', [RegistController::class, "showRegistry"])->name('register');
Route::get('/login', [RegistController::class, "showRegistry"])->name('login');
Route::post('/login', [RegistController::class, "accountHandling"])->name('loginSubmit');
Route::post('/register', [RegistController::class, "accountHandling"])->name('registSubmit');
Route::post('/logout', [RegistController::class, 'logout'])->name('logout');