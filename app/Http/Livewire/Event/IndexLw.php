<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\User;
use Livewire\Component;

class IndexLw extends Component
{
    public $create = false;
    public $show = false;
    public $index = true;
    public $event_id;
    //mostrar componentes de listas---------------
    public $componentToShow=null;
    protected $listeners = [
        'showEvent',
        'showEventList'
    ];
    public function showEventList($componentToShow)
    {
        $this->componentToShow = $componentToShow;
    }
    //--------------------------------------------

    public function render()
    {

        // $user = Auth()->user();
        // $guest=$user->Guest;
        // $photographer=$user->Photographer;
        // $organizer=$user->Organizer;

        // $eventsGuest=$guest->Events;
        // $eventsPhotographer=$photographer->Events;
        // $eventsOrganizer=$organizer->Events;

        //eventos donde soy fotografo
        return view('livewire.event.index-lw');
    }

    public function showIndex()
    {
        $this->index = true;
        $this->show = false;
        $this->create = false;
    }
    public function createEvent()
    {
        $this->create = true;
        $this->show = false;
        $this->index = false;
    }
    public function showEvent($id)
    {
        $this->event_id = $id;
        $this->show = true;
        $this->create = false;
        $this->index = false;
    }
}
