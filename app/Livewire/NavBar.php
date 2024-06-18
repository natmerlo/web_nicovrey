<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    public $menuOpen = false;

    public function toggleMenu()
    {
        $this->menuOpen = !$this->menuOpen;
    }
    
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
