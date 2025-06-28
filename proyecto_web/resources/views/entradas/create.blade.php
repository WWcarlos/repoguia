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
        <h1>Crear Entrada</h1>
        <form action="{{ route('entradas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="vehiculo_id">Vehículo</label>
                <select name="vehiculo_id" id="vehiculo_id" class="form-control">
                    <option value="">Seleccione un vehículo</option>
                    @foreach ($vehiculos as $vehiculo)
                        <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="espacio_id">Zona del Espacio</label>
                <select name="espacio_id" id="espacio_id" class="form-control">
                    <option value="" selected>Seleccione una zona</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
    <script>
        document.getElementById('vehiculo_id').addEventListener('change', function() {
            var vehiculoId = this.value;
            var espacios = @json($espacios);
            var vehiculos = @json($vehiculos);
            var selectedVehiculo = vehiculos.find(v => v.id == vehiculoId);
            var espacioSelect = document.getElementById('espacio_id');
            
            espacioSelect.innerHTML = '<option value="">Seleccione una zona</option>';
            
            if (selectedVehiculo) {
                var ubicaciones = espacios.filter(function(espacio) {
                    return espacio.estadoE == 'disponible' && espacio.tipo == selectedVehiculo.tipo;
                }).map(function(espacio) {
                    return espacio.ubicacion;
                }).filter(function(value, index, self) {
                    return self.indexOf(value) === index;
                });
    
                ubicaciones.forEach(function(ubicacion) {
                    var option = document.createElement('option');
                    option.value = ubicacion;
                    option.textContent = ubicacion;
                    espacioSelect.appendChild(option);
                });
            }
        });
    </script>
    @endsection
</body>
</html>