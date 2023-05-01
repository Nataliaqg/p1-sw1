<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $openModal;
    
    protected $listeners = [
        'openModal',
    ];

    public function render()
    {
        return view('livewire.components.modal');
    }
    public function openModal(){
        $this->openModal=true;
    }
    public function closeModal(){
        $this->openModal=false;
    }
}
