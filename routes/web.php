<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('welcome');
});
//One way of calling static view
/* Use this method if the page is static not needed of any  data */
Route::view('/contact', 'contact');




//Not using Dedicated Controller action
/* Route::get('/jobs', function () {
    //getting all data with associated with employer
   // $jobs = Job::with('employer')->get(); 

    //getting using Pagination
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
}); */

//Using Group Route
/* Route::controller(JobController::class)->group(function () {

Route::get('/jobs', [JobController::class, 'index']);

    Route::get('/jobs/create', 'create')->name('job.create');

    Route::get('/jobs/{job}/edit', 'edit');

    Route::get('/jobs/{job}', 'show');

    Route::post('/jobs', 'store');

    Route::patch('/jobs/{job}', 'update');

    Route::delete('/jobs/{job}', 'destroy');
}); */



/* 
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::post('/jobs', [JobController::class, 'store']);

Route::patch('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy']); */

//2 ways if you dont need all routes
Route::resource('jobs', JobController::class/* , [
    //expect means use all except destroy
    //'except' => ['destroy']

    //only means use all the route you declare
    //'only' => ['index']
] */);
