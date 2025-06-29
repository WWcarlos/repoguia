@extends('layouts.app')

@section('title', 'Activities')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Activities</h1>
        <a href="{{ route('activities.create') }}" class="btn btn-primary">+ Add Activity</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->course->name ?? 'N/A' }}</td>
                    <td>{{ $activity->title }}</td>
                    <td>{{ $activity->description }}</td>
                    <td>
                        <a href="{{ route('activities.show', $activity) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('activities.edit', $activity) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('activities.destroy', $activity) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
