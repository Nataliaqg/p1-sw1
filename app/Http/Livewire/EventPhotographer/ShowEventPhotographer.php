<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use App\Models\Event_Photographer;
use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class ShowEventPhotographer extends Component
{
    protected $listeners=[
        'refreshPhotographersList'
    ];

    public $event_id;
    //
    public function mount($event_id){
        $this->event_id=$event_id;
    }
    public function render()
    {   //quiero recibir los fotografos asociados a ese evento, pero ver si su status si confirmado o no

        //-------------------------------------
        $event=Event::find($this->event_id);
        $user = User::find(Auth()->user()->id);
        //-------------------------------------

        //trae coleccion de registros event_photographer los cuales estan asociados al evento pero no hayan confirmado la solicitud
        $pendingPhotographerId=Event_Photographer::select('photographer_id')->where('event_id',$this->event_id)->where('status',false)->get();
        $pendingPhotographers = Photographer::whereIn('id', $pendingPhotographerId)->get();
       
        //trae coleccion de registros event_photographer los cuales estan asociados al evento pero si hayan confirmado la solicitud
        $confirmedPhotographerId=Event_Photographer::select('photographer_id')->where('event_id',$this->event_id)->where('status',true)->get();
        $confirmedPhotographers = Photographer::whereIn('id', $confirmedPhotographerId)->get();
        
        return view('livewire.event-photographer.show-event-photographer',compact('event','user','pendingPhotographers','confirmedPhotographers'));
    }

    public function openModalShowPhotographer(){
        $this->emit('openModalShowPhotographer');
    }

    public function refreshPhotographersList(){
        $this->render();
    }
}
