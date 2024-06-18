<?php

namespace App\Livewire;

use App\Models\ListaTrabajos;
use App\Models\tab_trabajos_por_categ;
use Livewire\Component;

class JobsCards extends Component
{
    public $mostrarBoton = false;
    public $id;
    public $categoria;
    public $trabajos;

    public function mount($id, $categoria)
    {
        $this->id = $id;
        $this->categoria = $categoria;

        $this->trabajos = tab_trabajos_por_categ::where('id_categoria', $id)->get();


        // Si la categoría es "sound designer", mostrar el botón
        if ($categoria === "Sound Designer") {
            $this->mostrarBoton = true;
        }
    }

    public function render()
    {
        $par = $this->id % 2 === 0;

        return view(
            'livewire.jobs-cards', [
                'bg' => $par ? 'bg-negro' : 'bg-black',
            ]);
    }
}
