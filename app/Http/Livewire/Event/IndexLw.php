<?php

namespace App\Http\Livewire\Event;
use App\Models\Event;
use App\Models\User;
use Livewire\Component;

class IndexLw extends Component
{   
    public $create=false;
    public $show=false;
    public $index=true;

    public function render()
    {
        
        $userAuth=Auth()->user();
        $user=User::find($userAuth->id);
        $events=Event::select()
        ->join('guests','')
        //return view('livewire.event.index-lw');
    }

    public function showIndex(){
        $this->index=true;
        $this->show=false;
        $this->create=false;
    }
    public function createEvent(){
        $this->create=true;
        $this->show=false;
        $this->index=false;
    }
    public function showEvent(){
        $this->show=true;
        $this->create=false;
        $this->index=false;
    }
}
