<?php

namespace App\Http\Livewire\Photographer;

use Livewire\Component;

class ShowPhotographer extends Component
{
    public $openModalShowPhotographer;

    protected $listeners = [
        'openModalShowPhotographer',
    ];
    public function render()
    {
        return view('livewire.photographer.show-photographer');
    }

    public function openModalShowPhotographer(){
        $this->openModalShowPhotographer=true;

    }
    public function closeModal(){
        $this->openModalShowPhotographer=false;
        $this->emit('refresh');
    }
}
