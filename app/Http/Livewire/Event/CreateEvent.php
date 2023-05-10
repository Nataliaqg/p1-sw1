<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Traits\QrTrait;

class CreateEvent extends Component
{
    use QrTrait;
    public $event = [];
    public $newEvent_id;

    public function render(){
        return view('livewire.event.create-event');
    }

    public function store(){
       // dd($this->event);
        $this->validate([
            'event.name' => ['required', 'string', 'max:150'],
            'event.date' => ['required'],
            'event.time' => ['required'],
            'event.address' => ['required', 'string', 'max:150'],
            'event.required_photographers' => ['required', 'numeric', 'min:1']
        ]);
        $user = Auth()->user();

        if($user->Organizer->status===false){
            //no esta suscrito como organizador
            return;
        }
        $this->event['organizer_id'] = $user->Organizer->id;
        $newEvent = Event::create(
            $this->event
        );
        $this->newEvent_id=$newEvent->id;
        $url=$this->generateQr('http://127.0.0.1:8000/event/invitation/'.$newEvent->id);
        $newEvent->update([
            'guest_qr_path'=>$url
        ]);
        $this->showEvent();
        $this->openModal();
    }

    public function openModal(){
        $action='Crear evento';
        $message='El evento ha sido creado exitosamente';
        $this->emit('openModal',$action,$message);
    }

    public function showEvent(){
        $event_id=$this->newEvent_id;
        
        $this->emit('showEvent',$event_id);
    }
}
