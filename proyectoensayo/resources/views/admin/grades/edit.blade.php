<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Nota</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />

            <div class="bg-white p-6 rounded shadow-md">
                <form method="POST" action="{{ route('admin.grades.update', $grade) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Estudiante</label>
                        <input type="text" value="{{ $grade->student->name }}" disabled class="form-input mt-1 block w-full bg-gray-100">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Curso</label>
                        <input type="text" value="{{ $grade->course->name }}" disabled class="form-input mt-1 block w-full bg-gray-100">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nota</label>
                        <input type="number" name="score" value="{{ old('score', $grade->score) }}" class="form-input mt-1 block w-full" min="0" max="100" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
