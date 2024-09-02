<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('welcome');
});

//Index
Route::get('/jobs', function () {
    //getting all data with associated with employer
    /* $jobs = Job::with('employer')->get(); */

    //getting using Pagination
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

//Create
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

//Edit
Route::get('/jobs/{job}/edit', function (Job $job) {

    return view('jobs.edit', ['job' => $job]);
});

//Show
Route::get('/jobs/{job}', function (Job $job) {

    return view('jobs.show', ['job' => $job]);
});

//Store
Route::post('/jobs', function () {


    request()->validate([
        'title' => ['required'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => $_POST['salary'],
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//UPDATE
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required'],
        'salary' => ['required']
    ]);

    /* 1 way of updating data in database */
    /* $job->title = request('title');
    $job->salary = request('salary');
    $job->save(); */

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    return redirect('/jobs');
});

//Destroy
Route::delete('/jobs/{job}', function (Job $job) {

    $job->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
