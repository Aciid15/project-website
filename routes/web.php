<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// About route
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});