<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacio;
use App\Models\Vehiculo;
use App\Models\User;
use App\Models\Reserva;
use App\Models\Pago;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        $espacios_ocupados = Espacio::where('estadoE', 'ocupado')->count();
        $espacios_disponibles = Espacio::where('estadoE', 'disponible')->count();
        $total_vehiculos = Vehiculo::count();
        $total_usuarios = User::count();
        $total_reservas = Reserva::count();
        $pagos_pendientes = Pago::where('estado', 'Pendiente')->count();
        $pagos_completados = Pago::where('estado', 'Pagado')->count();

        $ultimas_reservas = Reserva::orderBy('fecha_reserva', 'desc')->take(10)->get();
        $ultimos_pagos = Pago::orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboard', compact(
            'espacios_ocupados',
            'espacios_disponibles',
            'total_vehiculos',
            'total_usuarios',
            'total_reservas',
            'pagos_pendientes',
            'pagos_completados',
            'ultimas_reservas',
            'ultimos_pagos'
        ));
    }
}
