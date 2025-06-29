@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Grades List</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('grades.create') }}" class="btn btn-primary mb-3">Add Grade</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Course</th>
                <th>Value</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($grades as $grade)
                <tr>
                    <td>{{ $grade->id }}</td>
                    <td>{{ $grade->student->name }}</td>
                    <td>{{ $grade->course->name }}</td>
                    <td>{{ $grade->value }}</td>
                    <td>{{ $grade->note }}</td>
                    <td>
                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No grades available.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
