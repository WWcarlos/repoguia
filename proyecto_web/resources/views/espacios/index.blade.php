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
        <h2 class="mb-4">Gestión de Espacios</h2>

        <a href="{{ route('espacios.create') }}" class="btn btn-success mb-3">Agregar Espacio</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Ubicacion</th>
                    <th>Tarifa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($espacios as $espacio)
                <tr>
                    <td>{{ $espacio->id }}</td>
                    <td>{{ $espacio->tipo }}</td>
                    <td>{{ $espacio->estadoE }}</td>
                    <td>{{ $espacio->ubicacion }}</td>
                    <td>${{ number_format($espacio->tarifa) }}</td>
                    <td>
                        <a href="{{ route('espacios.edit', $espacio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('espacios.destroy', $espacio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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