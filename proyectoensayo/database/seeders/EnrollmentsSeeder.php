<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enrollment;

class EnrollmentsSeeder extends Seeder
{
    public function run(): void
    {
        Enrollment::insert([
            ['student_id' => 3, 'course_id' => 1, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 4, 'course_id' => 2, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 5, 'course_id' => 3, 'status' => 'pending',  'enrolled_at' => now()],
            ['student_id' => 6, 'course_id' => 4, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 7, 'course_id' => 5, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 8, 'course_id' => 6, 'status' => 'pending',  'enrolled_at' => now()],
            ['student_id' => 9, 'course_id' => 7, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 10,'course_id' => 8, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 3, 'course_id' => 9, 'status' => 'approved', 'enrolled_at' => now()],
            ['student_id' => 4, 'course_id' => 10,'status' => 'approved', 'enrolled_at' => now()],
        ]);
    }
}

