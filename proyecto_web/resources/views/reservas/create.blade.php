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
        <h1>Crear Reserva</h1>
        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="usuario_id">Usuario</label>
                <select name="usuario_id" id="usuario_id" class="form-control">
                    <option value="">Seleccione un usuario</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="vehiculo_id">Vehículo</label>
                <select name="vehiculo_id" id="vehiculo_id" class="form-control">
                    <option value="">Seleccione un vehículo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="espacio_id">Zona del Espacio</label>
                <select name="espacio_id" id="espacio_id" class="form-control">
                    <option value="">Seleccione una zona</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_entrada">Fecha Entrada</label>
                <input type="datetime-local" name="fecha_entrada" id="fecha_entrada" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
    <script>
        document.getElementById('usuario_id').addEventListener('change', function() {
            var userId = this.value;
            var vehiculos = @json($vehiculos);
            var vehiculoSelect = document.getElementById('vehiculo_id');
            
            vehiculoSelect.innerHTML = '<option value="">Seleccione un vehículo</option>';
            
            var userVehiculos = vehiculos.filter(function(vehiculo) {
                return vehiculo.usuario_id == userId;
            });
    
            userVehiculos.forEach(function(vehiculo) {
                var option = document.createElement('option');
                option.value = vehiculo.id;
                option.textContent = vehiculo.placa;
                vehiculoSelect.appendChild(option);
            });
    
            // Trigger change event to update espacio_id options
            vehiculoSelect.dispatchEvent(new Event('change'));
        });
    
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