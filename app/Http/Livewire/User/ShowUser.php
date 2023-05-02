<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{   
    public $user = [];

    public function __construct()
    {
        $user = Auth()->user();
        $this->user = User::find($user->id)->toArray();
    }
    public function render()
    {
        //dd($this->user);
        return view('livewire.user.show-user');
    }

}
