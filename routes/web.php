<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< Updated upstream
    return view('welcome');
=======

    return view('welcome',);
>>>>>>> Stashed changes
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
