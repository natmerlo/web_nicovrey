<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $buttonText;
    public $type = 'text';
    public $bgClass = '';
    public $textClass = 'white';

    public function render()
    {
        return view('livewire.button');
    }
}
