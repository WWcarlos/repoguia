<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Datos simulados. Más adelante vendrán de la base de datos.
        $users = [
            (object)['id' => 1, 'nombre' => 'Ana García', 'email' => 'ana.garcia@example.com', 'rol' => 'Estudiante', 'fecha_registro' => '2025-06-20'],
            (object)['id' => 2, 'nombre' => 'Carlos Montoya', 'email' => 'carlos.montoya@example.com', 'rol' => 'Profesor', 'fecha_registro' => '2025-02-15'],
            (object)['id' => 3, 'nombre' => 'Luisa Fernandez', 'email' => 'luisa.fernandez@example.com', 'rol' => 'Padre', 'fecha_registro' => '2025-06-21'],
            (object)['id' => 4, 'nombre' => 'Admin User', 'email' => 'admin@example.com', 'rol' => 'Administrativo', 'fecha_registro' => '2025-01-10'],
        ];

        return view('admin.users.index', compact('users'));
    }
    
    public function create(): View
    {
        // Simulamos los roles que vienen de la base de datos
        $roles = [
            (object)['id' => 1, 'name' => 'Estudiante'],
            (object)['id' => 2, 'name' => 'Profesor'],
            (object)['id' => 3, 'name' => 'Padre'],
            (object)['id' => 4, 'name' => 'Administrativo'],
        ];

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request): RedirectResponse
    {
        // 1. Validación de los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // 'unique:users' previene emails duplicados
            'password' => 'required|string|min:8|confirmed', // 'confirmed' verifica que coincida con 'password_confirmation'
            'role_id' => 'required|integer|exists:roles,id', // 'exists:roles,id' verifica que el rol exista en la tabla roles
        ]);

        
        return redirect()->route('admin.users.index')
                         ->with('success', '¡Usuario creado exitosamente!');
    }

    public function edit(User $user): View
    {
        $roles = Role::all(); // Obtenemos todos los roles para el desplegable

         return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        // 1. Validación de los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'rol_id' => 'required|integer|exists:roles,id',
            
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // 2. Actualizar los datos del usuario
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rol_id = $request->rol_id;

        // 3. Actualizar la contraseña SÓLO si se proporcionó una nueva
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save(); // Guardar todos los cambios en la base de datos

        // 4. Redireccionar con mensaje de éxito
        return redirect()->route('admin.users.index')
                         ->with('success', '¡Usuario actualizado exitosamente!');
    }
}