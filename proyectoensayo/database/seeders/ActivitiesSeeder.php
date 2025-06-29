<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitiesSeeder extends Seeder
{
    public function run(): void
    {
        Activity::insert([
            ['course_id' => 1, 'title' => 'Introductory Quiz', 'description' => 'Basic concepts and introduction quiz.'],
            ['course_id' => 1, 'title' => 'Assignment 1', 'description' => 'First practical assignment.'],
            ['course_id' => 2, 'title' => 'Project Proposal', 'description' => 'Submit your project proposal.'],
            ['course_id' => 2, 'title' => 'Weekly Report', 'description' => 'Progress report on current task.'],
            ['course_id' => 3, 'title' => 'Workshop Participation', 'description' => 'Hands-on workshop session.'],
            ['course_id' => 3, 'title' => 'Final Report', 'description' => 'Final project report submission.'],
            ['course_id' => 4, 'title' => 'Reading Reflection', 'description' => 'Summarize and reflect on assigned reading.'],
            ['course_id' => 5, 'title' => 'Group Presentation', 'description' => 'Presentation on assigned topic.'],
            ['course_id' => 6, 'title' => 'Code Review', 'description' => 'Peer review of submitted code.'],
            ['course_id' => 7, 'title' => 'Exam 1', 'description' => 'Mid-course evaluation exam.'],
        ]);
    }
}
