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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vistas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('Bienvenido!') }}</h4>

                    <div class="mt-4">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary mb-2">Dashboard</a>
                        <a href="{{ route('espacios.index') }}" class="btn btn-primary mb-2">Espacios</a>
                        <a href="{{ route('entradas.index') }}" class="btn btn-primary mb-2">Entradas</a>
                        <a href="{{ route('pagos.index') }}" class="btn btn-primary mb-2">Pagos</a>
                        <a href="{{ route('reservas.index') }}" class="btn btn-primary mb-2">Reservas</a>
                        <a href="{{ route('users.index') }}" class="btn btn-primary mb-2">Usuarios</a>
                        <a href="{{ route('roles.index') }}" class="btn btn-primary mb-2">Roles</a>
                        <a href="{{ route('vehiculos.index') }}" class="btn btn-primary mb-2">Vehículos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>

