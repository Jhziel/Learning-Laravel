<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('welcome');
});
Route::get('/jobs', function () {
    //getting all data with associated with employer
    /* $jobs = Job::with('employer')->get(); */

    //getting using Pagination
    $jobs=Job::with('employer')->paginate(3);
    return view('jobs', ['jobs' => $jobs]);
});
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
