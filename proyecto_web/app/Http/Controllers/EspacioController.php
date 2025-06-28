<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacio;
use App\Models\Entrada;

class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacios = Espacio::all();
        return view('espacios.index', compact('espacios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('espacios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cantidad = $request->cantidad;

        for ($i = 0; $i < $cantidad; $i++) {
            $espacio = new Espacio;
            $espacio->tipo = $request->tipo;
            $espacio->estadoE = $request->estadoE;
            $espacio->ubicacion = $request->ubicacion;
            $espacio->tarifa = $request->tarifa;
            $espacio->save();
        };
        return redirect()->route('espacios.index');
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
        $espacio = Espacio::find($id);
        return view('espacios.edit', compact('espacio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $espacio = Espacio::find($id);
        $espacio->tipo = $request->tipo;
        $espacio->estadoE = $request->estadoE;
        $espacio->ubicacion = $request->ubicacion;
        $espacio->tarifa = $request->tarifa;
        $espacio->save();
        return redirect()->route('espacios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $espacio = Espacio::find($id);
        $espacio->delete();
        return redirect()->route('espacios.index');
    }

    public function actualizarEstadoEspacios()
    {
        // Obtener todos los espacios
        $espacios = Espacio::all();

        foreach ($espacios as $espacio) {
            // Verificar si hay entradas activas para este espacio
            $entradaActiva = Entrada::where('espacio_id', $espacio->id)
                                    ->where('estado', 'Activa')
                                    ->exists();

            // Actualizar el estado del espacio
            if ($entradaActiva) {
                $espacio->estadoE = 'ocupado';
            } else {
                $espacio->estadoE = 'disponible';
            }

            $espacio->save();
        }

        return redirect()->back()->with('status', 'Estados de los espacios actualizados correctamente.');
    }
}
