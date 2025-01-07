<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login_page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
