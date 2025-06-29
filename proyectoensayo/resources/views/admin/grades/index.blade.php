<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestión de Notas</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-message />

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Estudiante</th>
                            <th class="px-4 py-2">Curso</th>
                            <th class="px-4 py-2">Nota</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grades as $grade)
                            <tr>
                                <td class="border px-4 py-2">{{ $grade->student->name }}</td>
                                <td class="border px-4 py-2">{{ $grade->course->name }}</td>
                                <td class="border px-4 py-2">{{ $grade->score }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('admin.grades.edit', $grade) }}" class="text-blue-600 hover:underline">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
