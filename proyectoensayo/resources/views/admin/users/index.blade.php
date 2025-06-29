<x-layouts.app>
    <div class="container mx-auto p-8">
        
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p class="font-bold">Éxito</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Usuarios</h1>
            <a href="{{ route('admin.users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg inline-flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Crear Usuario
            </a>
        </div>
    
        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full leading-normal">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nombre</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Rol</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Fecha de Registro</th>
                        <th class="px-5 py-3 border-b-2 border-gray-300"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-4 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $user->role->name ?? 'Sin rol' }}</span>
                            </span>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->created_at->format('d/m/Y') }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 text-sm text-right">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
