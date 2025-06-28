<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;
use App\Models\Espacio;
use App\Models\User;
use App\Models\Vehiculo;
use Carbon\Carbon;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservas = [
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(10), 'fecha_entrada' => Carbon::now()->subDays(9), 'fecha_salida' => Carbon::now()->subDays(8), 'estado' => 'Terminada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(7), 'fecha_entrada' => Carbon::now()->subDays(6), 'fecha_salida' => Carbon::now()->subDays(5), 'estado' => 'Terminada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(4), 'fecha_entrada' => Carbon::now()->subDays(3), 'fecha_salida' => Carbon::now()->subDays(2), 'estado' => 'Terminada'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(1), 'fecha_entrada' => Carbon::now(), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(2), 'fecha_entrada' => Carbon::now()->subDays(1), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(3), 'fecha_entrada' => Carbon::now()->subDays(2), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(4), 'fecha_entrada' => Carbon::now()->subDays(3), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(5), 'fecha_entrada' => Carbon::now()->subDays(4), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(6), 'fecha_entrada' => Carbon::now()->subDays(5), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(7), 'fecha_entrada' => Carbon::now()->subDays(6), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(8), 'fecha_entrada' => Carbon::now()->subDays(7), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(9), 'fecha_entrada' => Carbon::now()->subDays(8), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(10), 'fecha_entrada' => Carbon::now()->subDays(9), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(11), 'fecha_entrada' => Carbon::now()->subDays(10), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(12), 'fecha_entrada' => Carbon::now()->subDays(11), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(13), 'fecha_entrada' => Carbon::now()->subDays(12), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(14), 'fecha_entrada' => Carbon::now()->subDays(13), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(15), 'fecha_entrada' => Carbon::now()->subDays(14), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(16), 'fecha_entrada' => Carbon::now()->subDays(15), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(17), 'fecha_entrada' => Carbon::now()->subDays(16), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(18), 'fecha_entrada' => Carbon::now()->subDays(17), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(19), 'fecha_entrada' => Carbon::now()->subDays(18), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(20), 'fecha_entrada' => Carbon::now()->subDays(19), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(21), 'fecha_entrada' => Carbon::now()->subDays(20), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(22), 'fecha_entrada' => Carbon::now()->subDays(21), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(23), 'fecha_entrada' => Carbon::now()->subDays(22), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(24), 'fecha_entrada' => Carbon::now()->subDays(23), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(25), 'fecha_entrada' => Carbon::now()->subDays(24), 'fecha_salida' => null, 'estado' => 'Reservado'],
            ['espacio_id' => Espacio::inRandomOrder()->first()->id, 'usuario_id' => User::inRandomOrder()->first()->id, 'vehiculo_id' => Vehiculo::inRandomOrder()->first()->id, 'fecha_reserva' => Carbon::now()->subDays(26), 'fecha_entrada' => Carbon::now()->subDays(25), 'fecha_salida' => null, 'estado' => 'Reservado'],
        ];

        foreach ($reservas as $reserva) {
            Reserva::create($reserva);
        }
    }
}