@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Gestión de Cursos</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.courses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        + Nuevo Curso
    </a>

    <div class="mt-6">
        <table class="min-w-full bg-white shadow rounded">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Descripción</th>
                    <th class="px-4 py-2 text-left">Profesor</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $course->id }}</td>
                        <td class="px-4 py-2">{{ $course->name }}</td>
                        <td class="px-4 py-2">{{ $course->description }}</td>
                        <td class="px-4 py-2">{{ $course->teacher?->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('admin.courses.edit', $course->id) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro?')" class="text-red-600 hover:underline">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500">No hay cursos disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
