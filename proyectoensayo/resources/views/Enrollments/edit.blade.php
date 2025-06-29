@extends('layouts.app')

@section('title', 'Edit Enrollment')

@section('content')
    <h1>Edit Enrollment</h1>

    <form action="{{ route('enrollments.update', $enrollment) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $enrollment->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $enrollment->status }}" required>
        </div>

        <div class="mb-3">
            <label for="enrolled_at" class="form-label">Enrollment Date</label>
            <input type="datetime-local" name="enrolled_at" id="enrolled_at" class="form-control"
                   value="{{ \Carbon\Carbon::parse($enrollment->enrolled_at)->format('Y-m-d\TH:i') }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
