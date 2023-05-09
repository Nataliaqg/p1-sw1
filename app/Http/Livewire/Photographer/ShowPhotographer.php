<?php

namespace App\Http\Livewire\Photographer;

use App\Models\Event;
use App\Models\Event_Photographer;
use App\Models\Photographer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowPhotographer extends Component
{
    public $openModalShowPhotographer;
    public $authUserId;
    public $userGuestId;
    public $userPhotographers;
    public $event_id;

    protected $listeners = [
        'openModalShowPhotographer',
    ];

    public function mount($event_id)
    {
        $this->event_id = $event_id;
    }
    public function render()
    {
        $event = Event::find($this->event_id);
        $eventPhotographers = $event->Photographers;
        $photographersAvailable = Photographer::select('user_id')->whereNotIn('id', $eventPhotographers)->where('status', true)->get();
        $this->userPhotographers = User::whereIn('id', $photographersAvailable)->where('id', '<>', Auth::id())->get();
        return view('livewire.photographer.show-photographer');
    }

    public function addPhotographer($id)
    {
        Event_Photographer::create([
            'event_id' => $this->event_id,
            'photographer_id' => $id,
            'status' => "En espera"
        ]);
    }

    public function openModalShowPhotographer()
    {
        $this->openModalShowPhotographer = true;
    }
    public function closeModal()
    {
        $this->openModalShowPhotographer = false;
        $this->emit('refresh');
    }
}
