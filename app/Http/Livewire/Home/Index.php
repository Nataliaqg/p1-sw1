<?php

namespace App\Http\Livewire\Home;

use App\Models\Organizer;
use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $user = [];
    public $isPhotographer=false;
    public $isOrganizer=false;
    public function __construct()
    {
        $user = Auth()->user();
        $this->user = User::find($user->id);
        $userPhotographer=Photographer::where('user_id',$user->id)->where('status',true)->first();
        if($userPhotographer != null){
            $this->isPhotographer=true;
        }
        
        $userOrganizer=Organizer::where('user_id',$user->id)->where('status',true)->first();
        if($userOrganizer != null){
            $this->isOrganizer=true;
        }
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
