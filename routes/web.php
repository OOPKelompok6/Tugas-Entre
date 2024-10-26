<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistryController\RegistController;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/register', [RegistController::class, "showRegistry"])->name('register');
Route::get('/login', [RegistController::class, "showRegistry"])->name('login');
Route::post('/login', [RegistController::class, "accountHandling"])->name('loginSubmit');
Route::post('/register', [RegistController::class, "accountHandling"])->name('registSubmit');
