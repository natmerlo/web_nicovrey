<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateModal extends Component
{
    use WithFileUploads;

    public $modalShown = false;
    public $titulo;
    public $descripcion;
    public $anio_publicacion;
    public $imagen;
    public $url;
    public $categorias = [];


    public function showModal()
    {
        $this->modalShown = true;
    }

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

    public function Grabar()
    {

        $validatedData = $this->validate([
            'titulo' => 'required|string',
            'descripcion' => 'nullable|string',
            'url' => 'nullable|url',
            'anio_publicacion' => 'nullable|integer',
            'imagen' => 'image|max:1024',
            'categorias' => 'required|array|min:1'
        ],[
            'titulo.required' => 'El título es obligatorio',
            'categorias.required' => 'Debes seleccionar al menos una categoría',
            'imagen' => 'Debes ingresar una imágen'
        ]);

        $pathImg = $this->imagen->store('img_trabajos', 'pathImg');

        $idInsertado = DB::table('trabajos')->insertGetId([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'imagen' => basename($pathImg),
            'anio_publicacion' => $this->anio_publicacion,
            'url' => $this->url,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach($this->categorias as $idCat){
            DB::table('tab_trabajos_categ')->insert([
                'id_trabajo' => $idInsertado,
                'id_categoria' => $idCat,
            ]);
        }

        $this->modalShown = false;
        $this->LimpiarCampos();
        $this->dispatch('actualiz-lista-trabajos');

    }

    public function render()
    {
        return view('livewire.create-modal');
    }
}
