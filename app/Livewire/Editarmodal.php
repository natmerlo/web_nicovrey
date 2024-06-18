<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Editarmodal extends Component
{
    use WithFileUploads;

    public $modalShown = false;
    public $titulo;
    public $descripcion;
    public $anio_publicacion;
    public $imagen;
    public $imagenAntig;
    public $url;
    public $categorias = [];
    public $id;

    public function hideModal()
    {
        $this->modalShown = false;
        $this->LimpiarCampos();
    }

    private function LimpiarCampos()
    {
        $this->reset([
            'titulo',
            'descripcion',
            'anio_publicacion',
            'imagen',
            'url',
            'categorias',
        ]);
        $this->resetErrorBag();
    }

    public function showModal(){
        $this->modalShown=true;

        $dtosTrabajo = DB::table('trabajos')->where('id', $this->id)->first();
        $dtosCateg = DB::table('tab_trabajos_categ')->where('id_trabajo', $this->id)->get();

        $this->titulo = $dtosTrabajo->titulo;
        $this->descripcion = $dtosTrabajo->descripcion;
        $this->anio_publicacion = $dtosTrabajo->anio_publicacion;
        $this->imagenAntig = $dtosTrabajo->imagen;
        $this->url = $dtosTrabajo->url;
        $this->categorias = $dtosCateg->pluck('id_categoria')->toArray();
    }

    public function Grabar(){

        $validatedData = $this->validate([
            'titulo' => 'required|string',
            'descripcion' => 'nullable|string',
            'url' => 'nullable|url',
            'anio_publicacion' => 'nullable|integer',
            'imagen' => 'nullable|image',
            'categorias' => 'required|array|min:1'
        ],[
            'titulo.required' => 'El título es obligatorio',
            'categorias.required' => 'Debes seleccionar al menos una categoría',
            'imagen' => 'Debes ingresar una imágen'
        ]);

        if($this->imagen){
            $rutaArchivo = public_path('img/img_trabajos/' . $this->imagenAntig);
            if (File::exists($rutaArchivo)) {
                File::delete($rutaArchivo);
            }
            $pathImg = $this->imagen->store('img_trabajos', 'pathImg');

            DB::table('trabajos')
                ->where('id', $this->id)
                ->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'imagen' => basename($pathImg),
                'anio_publicacion' => $this->anio_publicacion,
                'url' => $this->url,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('trabajos')
                ->where('id', $this->id)
                ->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'anio_publicacion' => $this->anio_publicacion,
                'url' => $this->url,
                'updated_at' => now(),
            ]);
        }

        DB::table('tab_trabajos_categ')
        ->where('id_trabajo', $this->id)
        ->delete();

        foreach($this->categorias as $idCat){
            DB::table('tab_trabajos_categ')->insert([
                'id_trabajo' => $this->id,
                'id_categoria' => $idCat,
            ]);
        }

        $this->modalShown = false;
        $this->LimpiarCampos();
        $this->dispatch('actualiz-lista-trabajos');
    }


    public function render()
    {
        return view('livewire.editarmodal');
    }
}
