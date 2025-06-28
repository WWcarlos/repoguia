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
        <h1>Crear Pago</h1>
        <form action="{{ route('pagos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="entrada_id">Entrada</label>
                <select name="entrada_id" id="entrada_id" class="form-control">
                    <option value="">Seleccione una entrada</option>
                    @foreach ($entradas as $entrada)
                        <option value="{{ $entrada->id }}" data-usuario-id="{{ $entrada->usuario_id }}" data-vehiculo-id="{{ $entrada->vehiculo_id }}" data-tarifa="{{ $entrada->espacio->tarifa }}" data-fecha-entrada="{{ $entrada->fecha_entrada }}">{{ $entrada->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="vehiculo_id">Vehículo</label>
                <input type="text" name="vehiculo_id" id="vehiculo_id" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="usuario_id">Usuario</label>
                <select name="usuario_id" id="usuario_id" class="form-control" readonly>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="montoPagar">Monto a Pagar</label>
                <input type="text" name="montoPagar" id="montoPagar" class="form-control" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
    <script>
        document.getElementById('entrada_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var usuarioId = selectedOption.getAttribute('data-usuario-id');
            var vehiculoId = selectedOption.getAttribute('data-vehiculo-id');
            var tarifa = parseFloat(selectedOption.getAttribute('data-tarifa'));
            var fechaEntrada = new Date(selectedOption.getAttribute('data-fecha-entrada'));
            var fechaActual = new Date();
            var horas = Math.ceil((fechaActual - fechaEntrada) / (1000 * 60 * 60));
            var montoPagar = tarifa * horas;
    
            document.getElementById('vehiculo_id').value = vehiculoId;
            document.getElementById('usuario_id').value = usuarioId;
            document.getElementById('montoPagar').value = montoPagar.toFixed(2);
        });
    </script>
    @endsection
</body>
</html>