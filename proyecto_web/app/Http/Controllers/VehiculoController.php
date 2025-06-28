<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\User;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        $users = User::all();
        return view('vehiculos.index', compact('vehiculos', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('vehiculos.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->tipo = $request->tipo;
        $vehiculo->placa = $request->placa;
        $vehiculo->usuario_id = $request->usuario_id;
        $vehiculo->save();
        return redirect()->route('vehiculos.index');
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
    //////////////REVISAR ESTA MONDA/////////////
    public function edit(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $users = User::all();
        return view('vehiculos.edit', compact('vehiculo', 'users'));
    }
    ///////////////////////////////////////////////////

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//falta validacion
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->tipo = $request->tipo;
        $vehiculo->placa = $request->placa;
        $vehiculo->usuario_id = $request->usuario_id;
        $vehiculo->save();
        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index');
    }
}
