@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
    <h1>Course Details</h1>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $course->name }}</h4>
            <p><strong>Capacity:</strong> {{ $course->capacity }}</p>
            <p><strong>Teacher:</strong> {{ $course->teacher->name ?? 'N/A' }}</p>
        </div>
    </div>

    <a href="{{ route('courses.index') }}" class="btn btn-primary mt-3">Back to Courses</a>
@endsection
