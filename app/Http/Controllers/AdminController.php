<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Trabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        return view('pages/admin');
    }

    public function create()
    {
        return view('pages/create');
    }

    public function createProcess(Request $request)
    {

        // Valida los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'descripcion' => 'nullable|string',
            'url' => 'nullable|url',
            'anio_publicacion' => 'nullable|integer',
            'imagen' => 'nullable|image',
        ]);

        // Crea un nuevo trabajo con los datos del formulario

        $idInsertado = DB::table('trabajos')->insertGetId([
            'titulo' => $request['titulo'],
            'descripcion' => $request['titulo'],
            'imagen' => $request['imagen'],
            'anio_publicacion' => $request['anio_publicacion'],
            'url' => $request['url'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        if(isset($request['productor'])){
            DB::table('tab_trabajos_categ')->insert([
                'id_trabajo' => $idInsertado,
                'id_categoria' => $request['productor'],
            ]);
        }
        if(isset($request['mix_mastering'])){
            DB::table('tab_trabajos_categ')->insert([
                'id_trabajo' => $idInsertado,
                'id_categoria' => $request['mix_mastering'],
            ]);
        }
        if(isset($request['sound_designer'])){
            DB::table('tab_trabajos_categ')->insert([
                'id_trabajo' => $idInsertado,
                'id_categoria' => $request['sound_designer'],
            ]);
        }

        return redirect()->route('admin');
    }

    public function edit($id)
    {
        //en base al id, hay que traer los datos de la tabla
        return view('pages/edit');
    }

    public function editProcess(Request $request)
    {

    }

    public function deleteProcess(int $id)
    {


    }
}
