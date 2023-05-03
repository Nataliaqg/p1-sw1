<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class ShowEventInfo extends Component
{
    //mostrar componentes
    public $showEdit=false;
    //
    public $event_id;
    //
    public function mount($event_id){
        $this->event_id=$event_id;
    }
    public function render()
    {
        $event=Event::find($this->event_id);
        return view('livewire.event.show-event-info',compact('event'));
    }

    public function showEditEvent(){
        $this->showEdit=true;
    }
}
