<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistryController\{RegistController, HomeController, StoreController, CartController};

Route::post('/details', [StoreController::class, "addItemtoGlobalCart"])->name('detailsAdd');
Route::get('/details', [StoreController::class, "setItemDetails"])->name('details');
Route::get('/store', [StoreController::class, "setStore"])->name('store');
Route::get('/', [HomeController::class, "ctrNavbar"])->name('home');
Route::get('/homeLogged', [HomeController::class, "ctrNavbar"])->name('homeLogged');
Route::get('/register', [RegistController::class, "showRegistry"])->name('register');
Route::get('/login', [RegistController::class, "showRegistry"])->name('login');
Route::post('/login', [RegistController::class, "accountHandling"])->name('loginSubmit');
Route::post('/register', [RegistController::class, "accountHandling"])->name('registSubmit');
Route::post('/logout', [RegistController::class, 'logout'])->name('logout');