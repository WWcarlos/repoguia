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
    <h2>Agregar Espacio</h2>

    <form action="{{ route('espacios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Espacio</label>
            <select class="form-control" id="tipo" name="tipo" onchange="updateTarifa()">
                <option value="" disabled selected>Seleccione</option>
                <option value="moto">Moto</option>
                <option value="carro">Carro</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="estadoE" class="form-label">Estado</label>
            <select class="form-control" id="estadoE" name="estadoE">
                <option value="disponible">Disponible</option>
                <option value="ocupado">Ocupado</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <select class="form-control" id="ubicacion" name="ubicacion" onchange="updateTarifa()">
                <option value="" disabled selected>Seleccione</option>
                <option value="Zona A">Zona A</option>
                <option value="Zona B">Zona B</option>
                <option value="Zona C">Zona C</option>
                <option value="Zona D">Zona D</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tarifa" class="form-label">Tarifa</label>
            <input type="number" class="form-control" id="tarifa" name="tarifa" step="0.01">
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" value="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Espacio</button>
    </form>
</div>

<script>
    function updateTarifa() {
        const tipo = document.getElementById('tipo').value;
        const ubicacion = document.getElementById('ubicacion').value;
        const tarifaInput = document.getElementById('tarifa');

        tarifaInput.value = getTarifa(tipo, ubicacion);
    }

    function getTarifa(tipo, ubicacion) {
        const tarifas = {
            moto: {
                'Zona A': 500,
                'Zona B': 1000,
                'Zona C': 1500,
                'Zona D': 2000
            },
            carro: {
                'Zona A': 2000,
                'Zona B': 3000,
                'Zona C': 3500,
                'Zona D': 4000
            }
        };

        return tarifas[tipo] ? tarifas[tipo][ubicacion] || 0.00 : 0.00;
    }
</script>
@endsection

</body>
</html>