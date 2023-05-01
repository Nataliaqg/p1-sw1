<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $openModal;
   

    public function render()
    {
        return view('livewire.components.modal');
    }
}
