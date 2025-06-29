@extends('layouts.app')

@section('title', 'Activity Details')

@section('content')
    <h1>Activity Details</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Course:</strong> {{ $activity->course->name ?? 'N/A' }}</p>
            <p><strong>Title:</strong> {{ $activity->title }}</p>
            <p><strong>Description:</strong> {{ $activity->description }}</p>
        </div>
    </div>

    <a href="{{ route('activities.index') }}" class="btn btn-primary mt-3">Back to Activities</a>
@endsection
