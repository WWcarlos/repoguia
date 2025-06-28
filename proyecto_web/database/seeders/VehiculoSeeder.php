<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use App\Models\User;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculos = [
            ['tipo' => 'carro', 'placa' => 'ABC-1234', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'XYZ-5678', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'DEF-2345', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'UVW-6789', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'GHI-3456', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'RST-7890', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'JKL-4567', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'OPQ-8901', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'MNO-5678', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'LMN-9012', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'PQR-6789', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'JKL-3456', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'STU-7890', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'DEF-1234', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'VWX-8901', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'ABC-2345', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'YZA-9012', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'GHI-2356', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'BCD-1234', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'EFG-2345', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'HIJ-3456', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'KLM-4567', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'NOP-5678', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'QRS-6789', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'TUV-7890', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'WXY-8901', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'ZAB-9012', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'CDE-1234', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'carro', 'placa' => 'FGH-2345', 'usuario_id' => User::inRandomOrder()->first()->id],
            ['tipo' => 'moto', 'placa' => 'IJK-3456', 'usuario_id' => User::inRandomOrder()->first()->id],
        ];

        foreach ($vehiculos as $vehiculo) {
            Vehiculo::create($vehiculo);
        }
    }
}