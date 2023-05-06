<?php

namespace App\Http\Livewire\Event\Index;

use Livewire\Component;

class OrganizerEvent extends Component
{
    public function render()
    {
        $user = Auth()->user();
        $organizer=$user->Organizer;
        $OrganizerEvents=$organizer->Events;
        return view('livewire.event.index.organizer-event', compact('OrganizerEvents'));
    }
     //Funcion que emite a IndexLw
     public function showEvent($id)
     {
         $this->emit('showEvent',$id);
     }
}
