<x-layouts.app>
    <div class="container mx-auto p-8 max-w-3xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Editar Usuario: {{ $user->name }}</h1>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT') <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="rol_id" class="block text-gray-700 text-sm font-bold mb-2">Rol:</label>
                    <select name="rol_id" id="rol_id" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Seleccione un rol</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ old('rol_id', $user->rol_id) == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6 border-t pt-6">
                    <p class="text-gray-600 text-sm mb-4">Deja los campos de contraseña en blanco si no deseas cambiarla.</p>
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Nueva Contraseña:</label>
                    <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Nueva Contraseña:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex items-center justify-end">
                    <a href="{{ route('admin.users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">
                        Cancelar
                    </a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Actualizar Usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>