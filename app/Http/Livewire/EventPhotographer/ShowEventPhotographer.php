<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class ShowEventPhotographer extends Component
{
    public $event_id;
    //
    public function mount($event_id){
        $this->event_id=$event_id;
    }
    public function render()
    {
        $event=Event::find($this->event_id);
        $photographers=$event->Photographers;
        $user = User::find(Auth()->user()->id);
        return view('livewire.event-photographer.show-event-photographer',compact('event','user','photographers'));
    }

    public function openModalShowPhotographer(){
        $this->emit('openModalShowPhotographer');
    }
}
