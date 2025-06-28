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
    <h1>Lista de Entradas</h1>
    <a href="{{ route('entradas.create') }}" class="btn btn-primary mb-3">Crear Entrada</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehículo</th>
                <th>Espacio</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->id }}</td>
                    <td>{{ $entrada->vehiculo->placa }}</td>
                    <td>{{ $entrada->espacio->ubicacion }}</td>
                    <td>{{ $entrada->fecha_entrada }}</td>
                    <td>{{ $entrada->fecha_salida ? $entrada->fecha_salida : '' }}</td>
                    <td>
                        @if ($entrada->estado == 'Completada')
                            {{ $entrada->estado }}
                        @else
                            <form action="{{ route('entradas.update', $entrada->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="estado" onchange="this.form.submit()">
                                    <option value="Activa" {{ $entrada->estado == 'Activa' ? 'selected' : '' }}>Activa</option>
                                    <option value="Completada" {{ $entrada->estado == 'Completada' ? 'selected' : '' }}>Completada</option>
                                </select>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('entradas.destroy', $entrada->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>