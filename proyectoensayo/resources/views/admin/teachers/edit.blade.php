@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Profesor</h1>

    <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
