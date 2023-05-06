<?php

namespace App\Http\Livewire\Event\Index;

use Livewire\Component;

class GuestEvent extends Component
{
    public function render()
    {
        $user = Auth()->user();
        $guest=$user->Guest;
        $GuestEvents=$guest->Events;
        return view('livewire.event.index.guest-event',compact('GuestEvents'));
    }

    //Funcion que emite a IndexLw
    public function showEvent($id)
    {
        $this->emit('showEvent',$id);
    }
}
