<?php

namespace App\Http\Livewire\Photography;

use App\Models\Event;
use App\Models\Notification;
use App\Models\Photography;
use App\Models\User;
use Livewire\Component;

class ShowEventPhotography extends Component
{
    public $event_id;
    public function mount($event_id){
        $this->event_id=$event_id;
    }

    protected $listeners = [
        'refresh',
    ];

    public function render()
    {
        $event=Event::find($this->event_id);
        $images= $event->Photographies;
        $Myimages=Photography::select('photographies.*')
        ->join('notifications','notifications.photography_id','photographies.id')
        ->where('notifications.user_id',Auth()->user()->id)
        ->where('photographies.event_id',$this->event_id)
        ->get();
        $event=Event::find($this->event_id);
        $user = User::find(Auth()->user()->id);
        return view('livewire.photography.show-event-photography',compact('event','user','images','Myimages'));
    }

    public function openModal2(){
        $this->emit('openModal');
    }
    public function refresh(){
        $this->render();
    }
    public function addCart($id){
        // dd($id);
        $this->emit('addCart',$id);
    }
}
