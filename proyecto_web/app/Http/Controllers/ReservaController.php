<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Espacio;
use App\Models\User;
use App\Models\Vehiculo;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::all();
        $users = User::all();
        $vehiculos = Vehiculo::all();
        $espacios = Espacio::all();
        return view('reservas.index', compact('reservas', 'users', 'vehiculos', 'espacios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $vehiculos = Vehiculo::all();
        $espacios = Espacio::all();
        return view('reservas.create', compact( 'users', 'vehiculos', 'espacios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo = Vehiculo::find($request->vehiculo_id);
        $espacios = Espacio::where('ubicacion', $request->espacio_id)
                        ->where('estadoE', 'disponible')
                        ->where('tipo', $vehiculo->tipo)
                        ->get();
        $espacio = $espacios->random();

        $reserva = new Reserva;
        $reserva->espacio_id = $espacio->id;
        $reserva->usuario_id = $request->usuario_id;
        $reserva->vehiculo_id = $request->vehiculo_id;
        $reserva->fecha_reserva = now();
        $reserva->fecha_entrada = $request->fecha_entrada;
        $reserva->fecha_salida = null;
        $reserva->estado = 'Reservado';
        $reserva->save();
        return redirect()->route('reservas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //no se necesita
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->estado = $request->estado;
    
        if ($request->estado == 'Terminada') {
            $reserva->fecha_salida = now();
        }
        $reserva->save();
    
        return redirect()->route('reservas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect()->route('reservas.index');
    }
}
