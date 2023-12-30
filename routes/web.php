<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController ;
use Illuminate\Auth\Events\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[CustomAuthController::class,'login'])->name('loginBlade')->middleware('isAlreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->name('registerBlade')->middleware('isAlreadyLoggedIn');

Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn')->name('dashboard');

Route::get('/logout',[CustomAuthController::class,'logout']);

