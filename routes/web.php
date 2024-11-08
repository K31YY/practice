<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/idex', function(){
    return view('idex');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', [UserController::class,'logins']);
