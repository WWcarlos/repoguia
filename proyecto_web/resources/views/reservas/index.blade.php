<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Crear Reserva</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Vehículo</th>
                <th>Zona del Espacio</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr id="row-{{ $reserva->id }}">
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->usuario->name }}</td>
                    <td>{{ $reserva->vehiculo->placa }}</td>
                    <td>{{ $reserva->espacio->ubicacion }}</td>
                    <td>{{ $reserva->fecha_entrada }}</td>
                    <td id="fecha-salida-{{ $reserva->id }}">{{ $reserva->fecha_salida ? $reserva->fecha_salida : '' }}</td>
                    <td id="estado-{{ $reserva->id }}">
                        <span>{{ $reserva->estado }}</span>
                        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST" id="form-estado-{{ $reserva->id }}" style="display:none;">
                            @csrf
                            @method('PUT')
                            <select name="estado" class="form-control" onchange="this.form.submit()">
                                <option value="Activa" {{ $reserva->estado == 'Reservado' ? 'selected' : '' }}>Reservado</option>
                                <option value="Terminada" {{ $reserva->estado == 'Terminada' ? 'selected' : '' }}>Terminada</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="enableEdit({{ $reserva->id }})" {{ $reserva->estado == 'Terminada' ? 'disabled' : '' }}>Editar</button>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" {{ $reserva->estado == 'Terminada' ? 'disabled' : '' }}>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function enableEdit(id) {
        var estadoSpan = document.querySelector('#estado-' + id + ' span');
        var estadoForm = document.getElementById('form-estado-' + id);

        estadoSpan.style.display = 'none';
        estadoForm.style.display = 'block';
    }
</script>
@endsection
</body>
</html>