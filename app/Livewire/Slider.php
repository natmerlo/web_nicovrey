<?php

namespace App\Livewire;

use App\Models\ListaTrabajos;
use App\Models\tab_trabajos_por_categ;
use Livewire\Component;

class Slider extends Component
{

    public $mostrarBoton = false;
    public $id;
    public $categoria;
    public $trabajos;


    public function mount($id, $categoria)
    {
        $this->id = $id;
        $this->categoria = $categoria;

    }

    public function render()
    {
        $this->trabajos = tab_trabajos_por_categ::where('id_categoria', $this->id)->get();

        // Si la categoría es "sound designer", mostrar el botón
        if ($this->categoria === "Sound Designer") {
            $this->mostrarBoton = true;
        }

        return view('livewire.slider');

    }
}

