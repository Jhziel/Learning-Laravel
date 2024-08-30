<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
<<<<<<< HEAD
<<<<<<< Updated upstream
    return view('welcome');
=======

    return view('welcome',);
>>>>>>> Stashed changes
=======
    return view('welcome',);
>>>>>>> 4a20327ce9fef09f8b0262a68d512064d00dc6b5
});
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
