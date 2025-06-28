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
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Espacio</label>
            <select class="form-control" id="tipo" name="tipo" onchange="updateTarifa()">
                <option value="" disabled selected>Seleccione</option>
                <option value="moto" {{ $vehiculo->tipo == 'moto' ? 'selected' : '' }}>Moto</option>
                <option value="carro" {{ $vehiculo->tipo == 'carro' ? 'selected' : '' }}>Carro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" value="{{ $vehiculo->placa }}" required>
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <select class="form-control" id="usuario_id" name="usuario_id" required>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $vehiculo->usuario_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
</body>
</html>