<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Reserva;
use Illuminate\Database\Seeder;
use App\Http\Controllers\EspacioController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolsSeeder::class,
            UserSeeder::class,
            VehiculoSeeder::class,
            EspacioSeeder::class,
            ReservaSeeder::class,
            EntradaSeeder::class,
            PagoSeeder::class,
 
        ]);
        
    }
}
