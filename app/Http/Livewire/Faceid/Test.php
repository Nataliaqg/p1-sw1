<?php

namespace App\Http\Livewire\Faceid;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
class Test extends Component
{
    protected $listeners = [
        'recognize',
        'setNotifications'
    ];

    public function render()
    {
        return view('livewire.faceid.test');
    }
    public function recognize($event_id, $photography)
    {
        $usuarios = [];
        $event = Event::find($event_id);
        $guests = $event->Guests;
        foreach ($guests as $guest) {
            $photos = array();
            $user = $guest->User;
            if ($user->photo_path1) {
                array_push($photos, $user->photo_path1);
            }
            if ($user->photo_path2) {
                array_push($photos, $user->photo_path2);
            }
            if ($user->photo_path3) {
                array_push($photos, $user->photo_path3);
            }
            $userArray = array(
                'id' => $user->id,
                'images' => $photos
            );
            array_push($usuarios, $userArray);
        }
        $this->emit('face-api', $usuarios, $photography);
    }
    public function setNotifications($users_id,$photography_id){
        dd($users_id,$photography_id);
    }
}
