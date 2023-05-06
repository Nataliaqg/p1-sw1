<?php

namespace App\Http\Livewire\Event\Index;

use Livewire\Component;

class PhotographerEvent extends Component
{
    public function render()
    {
        $user = Auth()->user();
        $photographer=$user->Photographer;
        $PhotographerEvents=$photographer->Events;
        return view('livewire.event.index.photographer-event', compact('PhotographerEvents'));
    }
     //Funcion que emite a IndexLw
     public function showEvent($id)
     {
         $this->emit('showEvent',$id);
     }
}
