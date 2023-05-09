<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowEventInfo extends Component
{
    //mostrar componentes
    public $showEdit=false;
    public $showInfo=true;
    //
    public $event_id;
    //
    public $IamOrganizer=false;

    protected $listeners = [
        'closeEditEvent',
    ];

    public function mount($event_id){
        $this->event_id=$event_id;
        $event=Event::find($this->event_id);
        $organizerId= $event->Organizer->user_id;
        $authId=Auth::id();
        if($authId===$organizerId){
            $this->IamOrganizer=true;
        }
    }
    public function render()
    {
        $event=Event::find($this->event_id);
        // $organizerId= $event->Organizer->user_id;
        // $authId=Auth::id();
        // if($authId===$organizerId){
        //     $this->IamOrganizer=true;
        // }
        //dd($organizerId);
        return view('livewire.event.show-event-info',compact('event'));
    }

    public function showEditEvent(){
        $this->showEdit=true;
        $this->showInfo=false;
    }

    public function closeEditEvent(){
        $this->showEdit=false;
        $this->showInfo=true;
    }


}
