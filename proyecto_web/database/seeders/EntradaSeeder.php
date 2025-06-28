<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrada;
use App\Models\Espacio;
use App\Models\Vehiculo;
use Carbon\Carbon;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entradas = [
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(10), 'fecha_salida' => Carbon::now()->subDays(9), 'estado' => 'Completada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(8), 'fecha_salida' => Carbon::now()->subDays(7), 'estado' => 'Completada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(6), 'fecha_salida' => Carbon::now()->subDays(5), 'estado' => 'Completada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(4), 'fecha_salida' => Carbon::now()->subDays(3), 'estado' => 'Completada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(2), 'fecha_salida' => Carbon::now()->subDays(1), 'estado' => 'Completada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(1), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(3), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(5), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(7), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(9), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(11), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(13), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(15), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(17), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(19), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(21), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(23), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(25), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(27), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(29), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(31), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(33), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(35), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(37), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(39), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(41), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(43), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(45), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(47), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(49), 'fecha_salida' => null, 'estado' => 'Activa'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_entrada' => Carbon::now()->subDays(51), 'fecha_salida' => null, 'estado' => 'Activa'],
        ];

        foreach ($entradas as $entrada) {
            Entrada::create($entrada);
        }
    }
}