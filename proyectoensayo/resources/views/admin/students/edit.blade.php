@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Estudiante</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $student->name) }}">
        </div>

        <div class="mb-3">
            <label>Correo</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email', $student->email) }}">
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
