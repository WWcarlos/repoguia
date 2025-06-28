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
    <h1>Lista de Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">Crear Pago</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Entrada</th>
                <th>Monto a Pagar</th>
                <th>Estado</th>
                <th>Fecha de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->usuario->name }}</td>
                    <td>{{ $pago->entrada->id }}</td>
                    <td>{{ $pago->montoPagar }}</td>
                    <td>{{ $pago->estado }}</td>
                    <td>{{ $pago->fecha_pago ? $pago->fecha_pago : '' }}</td>
                    <td>
                        <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
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