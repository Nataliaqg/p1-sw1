<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use App\Models\Event_Photographer;
use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class ShowEventPhotographer extends Component
{
    public $event_id;
    //
    public function mount($event_id){
        $this->event_id=$event_id;
    }
    public function render()
    {
        //NO FUNCA AUN
        $event=Event::find($this->event_id);
        $user = User::find(Auth()->user()->id);

        //trae coleccion de photographer_id los cuales estan asociados al evento pero no hayan confirmado la solicitud
        $pendingPhotographer_ids=Event_Photographer::select('photographer_id')->where('event_id',$this->event_id)->where('status',false)->get();
        //dd($pendingPhotographer_id);
        $pendingPhotographers= Photographer::where('id',$pendingPhotographer_ids)->get();

        //trae coleccion de photographer_id los cuales estan asociados al evento pero no hayan confirmado la solicitud
        $confirmedPhotographer_ids=Event_Photographer::select('photographer_id')->where('event_id',$this->event_id)->where('status',true)->get();
        //dd($pendingPhotographer_ids);
        $confirmedPhotographers= Photographer::where('id',$confirmedPhotographer_ids)->get();
        
        return view('livewire.event-photographer.show-event-photographer',compact('event','user','pendingPhotographers','confirmedPhotographers'));
    }

    public function openModalShowPhotographer(){
        $this->emit('openModalShowPhotographer');
    }
}
