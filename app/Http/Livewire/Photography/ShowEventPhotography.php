<?php

namespace App\Http\Livewire\Photography;

use App\Models\Event;
use App\Models\Photography;
use Livewire\Component;

class ShowEventPhotography extends Component
{
    public $event_id;
    public function mount($event_id){
        $this->event_id=$event_id;
    }

    protected $listeners = [
        'refresh',
    ];

    public function render()
    {
        $event=Event::find($this->event_id);
        $images= $event->Photographies;
        return view('livewire.photography.show-event-photography',compact('images'));
    }

    public function openModal2(){
        $this->emit('openModal');
    }
    public function refresh(){
        $this->render();
    }
    public function addCart($id){
        // dd($id);
        $this->emit('addCart2',$id);
    }
}
