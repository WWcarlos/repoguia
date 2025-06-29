@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Grade Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Student: {{ $grade->student->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Course: {{ $grade->course->name }}</h6>
            <p class="card-text"><strong>Value:</strong> {{ $grade->value }}</p>
            <p class="card-text"><strong>Note:</strong> {{ $grade->note ?? 'N/A' }}</p>
        </div>
    </div>

    <a href="{{ route('grades.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
