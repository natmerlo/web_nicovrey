<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all(); // Recupera todas las categorías de la tabla
        return view('pages/index', compact('categorias'));
    }
}
