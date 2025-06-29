<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\CoursesSeeder;
use Database\Seeders\EnrollmentsSeeder;
use Database\Seeders\PaymentsSeeder;
use Database\Seeders\GradesSeeder;
use Database\Seeders\ActivitiesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            CoursesSeeder::class,
            EnrollmentsSeeder::class,
            PaymentsSeeder::class,
            GradesSeeder::class,
            ActivitiesSeeder::class,
        ]);
    }
}
