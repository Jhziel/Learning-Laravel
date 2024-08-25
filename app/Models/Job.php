<?php

namespace App\Models;


use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
      /* the code for whenever the all is not static
        $jobInstance= new self();
        $job = Arr::first($jobInstance->all(), fn($job) => $job['id'] == $id); */
       
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
