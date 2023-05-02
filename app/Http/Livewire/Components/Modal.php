<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $openModal;
    public $action;
    public $message;
    
    protected $listeners = [
        'openModal',
    ];

    public function render()
    {
        return view('livewire.components.modal');
    }
    public function openModal($action,$message){
        $this->action=$action;
        $this->message=$message;
        $this->openModal=true;

    }
    public function closeModal(){
        $this->openModal=false;
    }
}
