<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Traits\QrTrait;

class CreateEvent extends Component
{
    use QrTrait;
    public $event = [];

    public function render()
    {
        return view('livewire.event.create-event');
    }
    public function store()
    {
        
       
        $this->validate([
            'event.name' => ['required'],
            'event.date' => ['required'],
            'event.time' => ['required'],
            'event.address' => ['required'],
            'event.required_photographers' => ['required']
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

        $url=$this->generateQr('http://127.0.0.1:8000/event/invitation/'.$newEvent->id);
        $newEvent->update([
            'guest_qr_path'=>$url
        ]);

        $this->openModal();
    }

    public function openModal(){
        $action='Crear evento';
        $message='El evento ha sido creado exitosamente';
        $this->emit('openModal',$action,$message);
    }
}
