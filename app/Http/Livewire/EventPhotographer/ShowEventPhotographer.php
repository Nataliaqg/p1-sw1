<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use App\Models\Photographer;
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
        return view('livewire.event-photographer.show-event-photographer',compact('photographers'));
    }
}
