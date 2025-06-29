@extends('layouts.app')

@section('title', 'Enrollment Details')

@section('content')
    <h1>Enrollment Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Student:</strong> {{ $enrollment->student->name ?? 'N/A' }}</p>
            <p><strong>Course:</strong> {{ $enrollment->course->name ?? 'N/A' }}</p>
            <p><strong>Status:</strong> {{ $enrollment->status }}</p>
            <p><strong>Enrolled At:</strong> {{ $enrollment->enrolled_at }}</p>
        </div>
    </div>

    <a href="{{ route('enrollments.index') }}" class="btn btn-primary mt-3">Back to Enrollments</a>
@endsection
