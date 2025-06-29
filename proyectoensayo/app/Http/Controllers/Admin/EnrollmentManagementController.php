<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentManagementController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['student', 'course'])->get();
        return view('admin.enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $students = \App\Models\User::whereHas('role', fn ($q) => $q->where('name', 'student'))->get();
        $courses = Course::all();
        return view('admin.enrollments.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        Enrollment::create($request->only('student_id', 'course_id'));

        return redirect()->route('admin.enrollments.index')->with('success', 'Matrícula creada.');
    }

    public function edit(Enrollment $enrollment)
    {
        $students = \App\Models\User::whereHas('role', fn ($q) => $q->where('name', 'student'))->get();
        $courses = Course::all();
        return view('admin.enrollments.edit', compact('enrollment', 'students', 'courses'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $enrollment->update($request->only('student_id', 'course_id'));

        return redirect()->route('admin.enrollments.index')->with('success', 'Matrícula actualizada.');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('admin.enrollments.index')->with('success', 'Matrícula eliminada.');
    }
}
