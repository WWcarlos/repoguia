@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Grade</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('grades.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $grade->student_id == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $grade->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="value" class="form-label">Grade Value</label>
            <input type="number" step="0.1" min="0" max="5" class="form-control" name="value" value="{{ $grade->value }}" required>
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note (optional)</label>
            <input type="text" class="form-control" name="note" value="{{ $grade->note }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Grade</button>
        <a href="{{ route('grades.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
