<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradesSeeder extends Seeder
{
    public function run(): void
    {
        Grade::insert([
            ['student_id' => 3, 'course_id' => 1, 'value' => 4.5, 'note' => 'Excellent'],
            ['student_id' => 4, 'course_id' => 2, 'value' => 4.0, 'note' => 'Good'],
            ['student_id' => 5, 'course_id' => 3, 'value' => 3.8, 'note' => 'Fair'],
            ['student_id' => 6, 'course_id' => 4, 'value' => 4.2, 'note' => 'Good work'],
            ['student_id' => 7, 'course_id' => 5, 'value' => 4.9, 'note' => 'Outstanding'],
            ['student_id' => 8, 'course_id' => 6, 'value' => 4.3, 'note' => 'Nice effort'],
            ['student_id' => 9, 'course_id' => 7, 'value' => 3.5, 'note' => 'Needs improvement'],
            ['student_id' => 10,'course_id' => 8, 'value' => 4.6, 'note' => 'Very good'],
            ['student_id' => 3, 'course_id' => 9, 'value' => 4.4, 'note' => 'Well done'],
            ['student_id' => 4, 'course_id' => 10,'value' => 4.1, 'note' => 'Solid'],
        ]);
    }
}
