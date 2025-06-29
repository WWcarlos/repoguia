{{-- resources/views/admin/enrollments/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Matrícula') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.enrollments.update', $enrollment) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-4">
                    <label class="block">Estudiante</label>
                    <select name="student_id" class="w-full border-gray-300 rounded-md shadow-sm">
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" @selected($student->id == $enrollment->student_id)>
                                {{ $student->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block">Curso</label>
                    <select name="course_id" class="w-full border-gray-300 rounded-md shadow-sm">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" @selected($course->id == $enrollment->course_id)>
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
            </form>
        </div>
    </div>
</x-app-layout>
