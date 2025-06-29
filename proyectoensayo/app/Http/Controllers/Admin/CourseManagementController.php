<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseManagementController extends Controller
{
    public function index()
    {
        $courses = Course::with('teacher')->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $teachers = User::whereHas('role', fn($q) => $q->where('name', 'teacher'))->get();
        return view('admin.courses.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'required|exists:users,id',
        ]);

        Course::create($request->only('name', 'description', 'teacher_id'));

        return redirect()->route('admin.courses.index')->with('success', 'Curso creado.');
    }

    public function edit(Course $course)
    {
        $teachers = User::whereHas('role', fn($q) => $q->where('name', 'teacher'))->get();
        return view('admin.courses.edit', compact('course', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $course->update($request->only('name', 'description', 'teacher_id'));

        return redirect()->route('admin.courses.index')->with('success', 'Curso actualizado.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Curso eliminado.');
    }
}
