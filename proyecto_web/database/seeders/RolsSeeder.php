<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'nombre' => 'Administrador',
            'label' => 'admin',
        ]);
        
        Rol::create([
            'nombre' => 'Empleado',
            'label' => 'empleado',
        ]);

        Rol::create([
            'nombre' => 'Cliente',
            'label' => 'cliente',
        ]);
    }
}
