<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{   
    public $user=[];
    public function render()
    {
        $user= Auth()->user();
        $this->user= User::find($user->id)->toArray();
        //dd($user);
        return view('livewire.user.edit-user',compact('user'));
    }
}
