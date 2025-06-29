<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Mostrar todos los cursos
    public function index()
    {
        $courses = Course::with('teacher')->get();
        return view('courses.index', compact('courses'));
    }

    // Formulario para crear curso
    public function create()
    {
        $teachers = User::whereHas('role', function ($query) {
            $query->where('name', 'Teacher');
        })->get();

        return view('courses.create', compact('teachers'));
    }

    // Guardar curso
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'teacher_id' => 'required|exists:users,id',
        ]);

        Course::create([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    // Mostrar un curso
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Formulario para editar curso
    public function edit(Course $course)
    {
        $teachers = User::whereHas('role', function ($query) {
            $query->where('name', 'Teacher');
        })->get();

        return view('courses.edit', compact('course', 'teachers'));
    }

    // Actualizar curso
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $course->update($request->only('name', 'capacity', 'teacher_id'));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Eliminar curso
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
