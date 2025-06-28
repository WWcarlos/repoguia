<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //No creo que necesite crear mas roles
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //No creo que necesite mostrar un rol
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //No se pueden editar
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Si se necesita actualizar?, naa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Tampoco borrar, pa que borrar un rol
    }
}
