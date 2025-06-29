@extends('layouts.app')

@section('title', 'Edit Activity')

@section('content')
    <h1>Edit Activity</h1>

    <form action="{{ route('activities.update', $activity) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $activity->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $activity->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $activity->description }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
