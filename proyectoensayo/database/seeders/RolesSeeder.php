<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

// Asegúrate de que el nombre de la clase coincida con tu archivo
class RolesSeeder extends Seeder 
{
    public function run(): void
    {
        // Usando el método create, que es el estándar de Eloquent
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Teacher']);
        Role::create(['name' => 'Student']);
        Role::create(['name' => 'Father']); 
    }
}
