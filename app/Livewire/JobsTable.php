<?php

namespace App\Livewire;

use App\Models\ListaTrabajos;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class JobsTable extends Component
{
    public function Eliminar($id){
        
        DB::table('trabajos')
        ->where('id', $id)
        ->delete();

        DB::table('tab_trabajos_categ')
        ->where('id_trabajo', $id)
        ->delete();

    }
    
    #[On('actualiz-lista-trabajos')]
    public function render()
    {
        $trabajos = ListaTrabajos::all();
        return view('livewire.jobs-table', ['trabajos'=>$trabajos]);
    }
}
