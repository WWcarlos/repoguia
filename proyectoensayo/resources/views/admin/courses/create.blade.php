@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Crear Curso</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.courses.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">Nombre del curso</label>
            <input type="text" name="name" id="name" class="form-input w-full" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="description" class="block font-medium text-sm text-gray-700">Descripción</label>
            <textarea name="description" id="description" class="form-textarea w-full" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="teacher_id" class="block font-medium text-sm text-gray-700">Profesor</label>
            <select name="teacher_id" id="teacher_id" class="form-select w-full" required>
                <option value="">-- Selecciona un profesor --</option>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                        {{ $teacher->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('admin.courses.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</div>
@endsection
