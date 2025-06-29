@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Add Course</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($courses->count())
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Capacity</th>
                    <th>Teacher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->capacity }}</td>
                        <td>{{ $course->teacher->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No courses found.</p>
    @endif
@endsection
