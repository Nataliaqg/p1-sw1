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

    public function render()
    {

        $user = Auth()->user();

        $events = Event::select('events.*','event_photographer.event_id as isPhotographer','event_guest.event_id as isGuest')
            ->leftjoin('organizers', 'organizers.id', 'events.organizer_id')
            ->leftjoin('event_photographer', 'event_photographer.event_id', 'events.id')
            ->leftjoin('photographers', 'photographers.id', 'event_photographer.photographer_id')
            ->leftjoin('event_guest', 'event_guest.event_id', 'events.id')
            ->leftjoin('guests', 'guests.id', 'event_guest.guest_id')

            ->where('organizers.user_id', '=', $user->id)
            ->orWhere('photographers.user_id', '=', $user->id)
            ->orWhere('guests.user_id', '=', $user->id)
            ->get();
        return view('livewire.event.index-lw', compact('events'));
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
        $this->event_id=$id;
        $this->show = true;
        $this->create = false;
        $this->index = false;
    }
}
