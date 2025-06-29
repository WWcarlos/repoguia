@extends('layouts.app')

@section('title', 'Add Enrollment')

@section('content')
    <h1>Add Enrollment</h1>

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="enrolled_at" class="form-label">Enrollment Date</label>
            <input type="datetime-local" name="enrolled_at" id="enrolled_at" class="form-control">
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
