<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class EditEvent extends Component
{
    public $event_id;
    public $event;

    protected $rules = [
        'event.name' => 'required',
        'event.date' => 'required|date',
        'event.time' => 'required',
        'event.address' => 'required',
        'event.required_photographers' => 'required|integer|min:1',
    ];

    public function mount($event_id)
    {
        $this->event = Event::find($event_id);
        $this->event_id = $event_id;
    }
    public function render()
    {
        return view('livewire.event.edit-event');
    }

    public function update()
    {
        $this->validate();

        $event = Event::find($this->event_id);
        $event->name = $this->event['name'];
        $event->date = $this->event['date'];
        $event->time = $this->event['time'];
        $event->address = $this->event['address'];
        $event->required_photographers = $this->event['required_photographers'];
        $event->save();
        $this->closeEditEvent();
    }

    public function closeEditEvent(){
        $this->emit('closeEditEvent');
    }
}
