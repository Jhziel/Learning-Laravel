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
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {

    return view('jobs.create');
});
Route::get('/jobs/{id}/edit', function (Job $job) {

    return view('jobs.edit', ['job' => $job]);
});

Route::get('/jobs/{id}', function (Job $job) {

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {


    request()->validate([
        'title' => ['required'],
        'salary' => ['required', 'integer']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => $_POST['salary'],
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
