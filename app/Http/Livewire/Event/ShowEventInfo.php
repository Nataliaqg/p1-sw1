<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class ShowEventInfo extends Component
{
    //mostrar componentes
    public $showEdit=false;
    //
    public function render()
    {
        return view('livewire.event.show-event-info');
    }

    public function showEditEvent(){
        $this->showEdit=true;
    }
}
