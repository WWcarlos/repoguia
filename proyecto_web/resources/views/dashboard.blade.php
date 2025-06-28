<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Gestión de Parqueadero</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard - Gestión de Parqueadero</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Resumen</div>
                <div class="card-body">
                    <p><strong>Espacios Ocupados:</strong> {{ $espacios_ocupados }}</p>
                    <p><strong>Espacios Disponibles:</strong> {{ $espacios_disponibles }}</p>
                    <p><strong>Total de Vehículos:</strong> {{ $total_vehiculos }}</p>
                    <p><strong>Total de Usuarios:</strong> {{ $total_usuarios }}</p>
                    <p><strong>Total de Reservas:</strong> {{ $total_reservas }}</p>
                    <p><strong>Total de Pagos Pendientes:</strong> {{ $pagos_pendientes }}</p>
                    <p><strong>Total de Pagos Completados:</strong> {{ $pagos_completados }}</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <a href="{{ route('actualizar.estado.espacios') }}" class="btn btn-primary">Actualizar Estado de Espacios</a>

    <hr>

    <h3>Últimas Reservas</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Vehículo</th>
                <th>Espacio</th>
                <th>Fecha Reserva</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ultimas_reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->usuario->name }}</td>
                    <td>{{ $reserva->vehiculo->placa }}</td>
                    <td>{{ $reserva->espacio->ubicacion }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>{{ $reserva->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <h3>Últimos Pagos</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Entrada</th>
                <th>Monto a Pagar</th>
                <th>Estado</th>
                <th>Fecha de Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ultimos_pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->usuario->name }}</td>
                    <td>{{ $pago->entrada->id }}</td>
                    <td>{{ $pago->montoPagar }}</td>
                    <td>{{ $pago->estado }}</td>
                    <td>{{ $pago->fecha_pago ? $pago->fecha_pago : 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>