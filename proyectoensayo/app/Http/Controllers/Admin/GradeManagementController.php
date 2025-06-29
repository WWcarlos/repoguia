<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class GradeManagementController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['student', 'course'])->get();
        return view('admin.grades.index', compact('grades'));
    }

    public function edit(Grade $grade)
    {
        $students = User::whereHas('role', function ($q) {
            $q->where('name', 'student');
        })->get();

        $courses = Course::all();
        return view('admin.grades.edit', compact('grade', 'students', 'courses'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'score' => 'required|numeric|min:0|max:100',
        ]);

        $grade->update([
            'score' => $request->score,
        ]);

        return redirect()->route('admin.grades.index')->with('success', 'Nota actualizada correctamente.');
    }
}
