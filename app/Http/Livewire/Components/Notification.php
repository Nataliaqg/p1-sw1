<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Notification as ModelNotification;

class Notification extends Component
{
    public $user_id;

    public function mount(){
        $user=Auth()->user();
        $this->user_id=$user->id;
    }
    public function render()
    {
        $notifications=ModelNotification::where('user_id',$this->user_id)->get();
        return view('livewire.components.notification',compact('notifications'));
    }
}
