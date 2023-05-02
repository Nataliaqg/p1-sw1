<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class ShowEvent extends Component
{   
    //ver componentes
    public $showEventInfo=false;
    public $showEventPhotographer=false;
    public $showEventPhotography=false;
    //
    public function render()
    {
        return view('livewire.event.show-event');
    }

    public function showEventInfo(){
        $this->showEventInfo=true;
        $this->showEventPhotographer=false;
        $this->showEventPhotography=false;

    }
    public function showEventPhotographer(){
        $this->showEventPhotographer=true;
        $this->showEventInfo=false;
        $this->showEventPhotography=false;

    }
    public function showEventPhotography(){
        $this->showEventPhotography=true;
        $this->showEventInfo=false;
        $this->showEventPhotographer=false;
    }
}
