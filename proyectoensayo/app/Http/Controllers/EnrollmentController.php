<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['student', 'course'])->get();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $students = User::whereHas('role', fn($q) => $q->where('name', 'Student'))->get();
        $courses = Course::all();

        return view('enrollments.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required|string|max:50',
            'enrolled_at' => 'nullable|date',
        ]);

        Enrollment::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at ?? Carbon::now(),
        ]);

        return redirect()->route('enrollments.index')->with('success', 'Enrollment created successfully!');
    }

    public function show(Enrollment $enrollment)
    {
        return view('enrollments.show', compact('enrollment'));
    }

    public function edit(Enrollment $enrollment)
    {
        $students = User::whereHas('role', fn($q) => $q->where('name', 'Student'))->get();
        $courses = Course::all();

        return view('enrollments.edit', compact('enrollment', 'students', 'courses'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'status' => 'required|string|max:50',
            'enrolled_at' => 'nullable|date',
        ]);

        $enrollment->update([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'status' => $request->status,
            'enrolled_at' => $request->enrolled_at,
        ]);

        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully!');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully!');
    }
}
