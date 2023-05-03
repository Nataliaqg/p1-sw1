<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class ShowEvent extends Component
{   
    //ver componentes
    public $showEventInfo=false;
    public $showEventPhotographer=false;
    public $showEventPhotography=false;
    public $event_id;
    //
    public function mount($event_id){
        $this->showEventInfo();
        $this->event_id=$event_id;
    }

    public function render()
    {
        return view('livewire.event.show-event');
    }

    public function showEventInfo(){
        $this->showEventPhotographer=false;
        $this->showEventPhotography=false;
        $this->showEventInfo=true;
    }

    public function showEventPhotographer(){
        $this->showEventInfo=false;
        $this->showEventPhotography=false;
        $this->showEventPhotographer=true;
    }

    public function showEventPhotography(){
        $this->showEventPhotography=true;
        $this->showEventInfo=false;
        $this->showEventPhotographer=false;
    }
}
