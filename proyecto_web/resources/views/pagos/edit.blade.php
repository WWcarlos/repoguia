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
    <h1>Editar Pago</h1>
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="entrada_id">Entrada</label>
            <select name="entrada_id" id="entrada_id" class="form-control" disabled>
                <option value="{{ $pago->entrada->id }}">{{ $pago->entrada->id }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuario: </label>
            <strong>{{ $pago->usuario->name }}</strong>
            <input type="text" name="usuario_id" id="usuario_id" class="form-control" value="{{ $pago->usuario->id }}" readonly>
        </div>
        <div class="form-group">
            <label for="montoPagar">Monto a Pagar</label>
            <input type="number" name="montoPagar" id="montoPagar" class="form-control" value="{{ $pago->montoPagar }}">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Pendiente" {{ $pago->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="Pagado" {{ $pago->estado == 'Pagado' ? 'selected' : '' }}>Pagado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
</body>
</html>