<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class ShowEventInfo extends Component
{
    //mostrar componentes
    public $showEdit=false;
    public $showInfo=true;
    //
    public $event_id;
    //

    protected $listeners = [
        'closeEditEvent',
    ];

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
        $this->showInfo=false;
    }

    public function closeEditEvent(){
        $this->showEdit=false;
        $this->showInfo=true;
    }


}
