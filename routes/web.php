<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',);
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Junior Web Developer',
                'salary' => '₱35,000.'
            ],
            [
                'id' => 2,
                'title' => 'Junior SAP Developer',
                'salary' => '₱26,000.'
            ],
            [
                'id' => 3,
                'title' => 'Junior Software Engineer',
                'salary' => '₱28,000.'
            ]
        ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Junior Web Developer',
            'salary' => '₱35,000.'
        ],
        [
            'id' => 2,
            'title' => 'Junior SAP Developer',
            'salary' => '₱26,000.'
        ],
        [
            'id' => 3,
            'title' => 'Junior Software Engineer',
            'salary' => '₱28,000.'
        ]
    ];

    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    return view('job', ['job' => $job]);
    /* One way to pass the data to view
    return view('job', ['job' => $jobs[$id - 1]]); */
});
Route::get('/contact', function () {
    return view('contact');
});
