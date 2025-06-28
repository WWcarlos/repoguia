<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\User;
use App\Models\Entrada;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagos = Pago::all();
        $users = User::all();
        $entradas = Entrada::all();
        return view('pagos.index', compact('pagos', 'users', 'entradas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $users = User::all();
    $entradas = Entrada::with('espacio', 'vehiculo')->get();
    return view('pagos.create', compact('users', 'entradas'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pago = new Pago;
        $pago->usuario_id = $request->usuario_id;
        $pago->entrada_id = $request->entrada_id;
        $pago->montoPagar = $request->montoPagar;
        $pago->estado = 'Pendiente';
        $pago->fecha_pago = null;
        $pago->save();
        return redirect()->route('pagos.index');
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
        $pago = Pago::find($id);
        $users = User::all();
        $entrada = Entrada::all();
        return view('pagos.edit', compact('pago', 'users', 'entrada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pago = Pago::find($id);
        $pago->montoPagar = $request->montoPagar;
        $pago->estado = $request->estado;
        $pago->fecha_pago = now();
        $pago->save();
        return redirect()->route('pagos.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pago = Pago::find($id);
        $pago->delete();
        return redirect()->route('pagos.index');
    }
}
