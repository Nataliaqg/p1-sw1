<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class IndexLw extends Component
{   
    public $create=false;
    public $edit=false;

    public function render()
    {
        return view('livewire.event.index-lw');
    }

    public function createEvent(){
        $this->create=true;
        $this->edit=false;
    }
    public function editEvent(){
        $this->edit=true;
        $this->create=false;
    }
}
