@extends('layouts.app')

@section('title', 'Enrollments')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Enrollments</h1>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">+ Add Enrollment</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Course</th>
                <th>Status</th>
                <th>Enrolled At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->id }}</td>
                    <td>{{ $enrollment->student->name ?? 'N/A' }}</td>
                    <td>{{ $enrollment->course->name ?? 'N/A' }}</td>
                    <td>{{ $enrollment->status }}</td>
                    <td>{{ $enrollment->enrolled_at }}</td>
                    <td>
                        <a href="{{ route('enrollments.show', $enrollment) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('enrollments.edit', $enrollment) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
