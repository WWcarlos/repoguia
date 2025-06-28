<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Espacio;
use App\Models\Vehiculo;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entradas = Entrada::all();
        $espacios = Espacio::all();
        $vehiculos = Vehiculo::all();
        return view('entradas.index', compact('entradas', 'espacios', 'vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espacios = Espacio::all();
        $vehiculos = Vehiculo::all();
        return view('entradas.create', compact('espacios', 'vehiculos'));
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

        $entrada = new Entrada;
        $entrada->espacio_id = $espacio->id;
        $entrada->vehiculo_id = $request->vehiculo_id;
        $entrada->fecha_entrada = now();
        $entrada->fecha_salida = null;
        $entrada->estado = 'Activa';
        $entrada->save();

        $espacio->estadoE = 'ocupado';
        $espacio->save();
        return redirect()->route('entradas.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrada = Entrada::find($id);
        $entrada->estado = $request->estado;

    if ($request->estado == 'Completada') {
        $entrada->fecha_salida = now();
    }

    $entrada->save();

    $espacio = Espacio::find($entrada->espacio_id);
    $espacio->estadoE = 'disponible';
    $espacio->save();

    return redirect()->route('entradas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrada = Entrada::find($id);
        $entrada->delete();

        // Actualizar el estado del espacio a "disponible"
        $espacio = Espacio::find($entrada->espacio_id);
        $espacio->estadoE = 'disponible';
        $espacio->save();
             
        return redirect()->route('entradas.index');
    }
}
