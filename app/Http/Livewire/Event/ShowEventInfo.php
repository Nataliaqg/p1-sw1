<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowEventInfo extends Component
{
    //mostrar componentes
    public $showEdit = false;
    public $showInfo = true;
    //
    public $event_id;
    //
    public $IamOrganizer = false;

    protected $listeners = [
        'closeEditEvent',
    ];

    public function mount($event_id)
    {
        $this->event_id = $event_id;
    }
    public function render()
    {
        $event = Event::find($this->event_id);
        $user = User::find(Auth()->user()->id);
        return view('livewire.event.show-event-info', compact('event', 'user'));
    }

    public function showEditEvent()
    {
        $this->showEdit = true;
        $this->showInfo = false;
    }

    public function closeEditEvent()
    {
        $this->showEdit = false;
        $this->showInfo = true;
    }
}
