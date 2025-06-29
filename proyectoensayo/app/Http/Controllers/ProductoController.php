<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Asegúrate de importar la clase View

class ProductoController extends Controller
{
    /**
     * Muestra la página principal de productos.
     */
    public function index(): View
    {
        // De momento, solo devolvemos la vista.
        // El nombre 'productos.index' sigue una convención:
        // carpeta.archivo dentro de resources/views/
        return view('productos.index');
    }
}