<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    public function run(): void
    {
        Course::insert([
            ['name' => 'Web Design',        'capacity' => 25, 'teacher_id' => 2],
            ['name' => 'Databases',         'capacity' => 30, 'teacher_id' => 2],
            ['name' => 'JavaScript Basics', 'capacity' => 20, 'teacher_id' => 2],
            ['name' => 'PHP and Laravel',   'capacity' => 25, 'teacher_id' => 2],
            ['name' => 'ReactJS',           'capacity' => 30, 'teacher_id' => 2],
            ['name' => 'HTML/CSS',          'capacity' => 25, 'teacher_id' => 2],
            ['name' => 'OOP Concepts',      'capacity' => 20, 'teacher_id' => 2],
            ['name' => 'Git & GitHub',      'capacity' => 25, 'teacher_id' => 2],
            ['name' => 'Agile Methods',     'capacity' => 30, 'teacher_id' => 2],
            ['name' => 'APIs & JSON',       'capacity' => 20, 'teacher_id' => 2],
        ]);
    }
}
