<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(12)->create([
            'last_name' => 'Barnedo',
            'first_name' => 'Don Jaziel',
            'password' => bcrypt('pass123')
        ]);

        Job::factory(15)->create();
        Employer::factory(1)->create(
            [
                'id' => 1

            ]
        );
    }
}
