<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;

class IndexLw extends Component
{   
    public $create=false;
    public $show=false;

    public function render()
    {
        return view('livewire.event.index-lw');
    }

    public function createEvent(){
        $this->create=true;
        $this->show=false;
    }
    public function showEvent(){
        $this->show=true;
        $this->create=false;
    }
}
