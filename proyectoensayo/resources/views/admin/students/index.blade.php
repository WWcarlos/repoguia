@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestión de Estudiantes</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.students.create') }}" class="btn btn-primary mb-3">Nuevo Estudiante</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('admin.students.destroy', $student) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Estás seguro?')" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">No hay estudiantes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
