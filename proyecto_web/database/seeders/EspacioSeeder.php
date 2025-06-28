<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Espacio;

class EspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $espacios = [
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 2000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 1000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 3000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 1500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 3500],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 2000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 4000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 2000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 1000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 3000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 1500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 3500],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 2000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 4000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 2000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 1000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 3000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 1500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 3500],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 2000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona D', 'tarifa' => 4000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona A', 'tarifa' => 2000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 1000],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona B', 'tarifa' => 3000],
            ['tipo' => 'moto', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 1500],
            ['tipo' => 'carro', 'estadoE' => 'disponible', 'ubicacion' => 'Zona C', 'tarifa' => 3500],
        ];

        foreach ($espacios as $espacio) {
            Espacio::create($espacio);
        }
    }
}