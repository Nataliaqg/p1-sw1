<?php

namespace App\Http\Livewire\User;

use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $user = [];
    public $photographer;

    public function __construct()
    {
        $user = Auth()->user();
        $this->user = User::find($user->id)->toArray();
       // $this->photographer = Photographer::where('user_id', $user->id)->first();
        $this->photographer = Photographer::where('user_id', $user->id)
            ->where('status', true)
            ->first();
    }
    public function render()
    {
        return view('livewire.user.show-user');
    }

    public function openEditUser()
    {
        $showEdit = true;
        $this->emit('openEditUser', $showEdit);
    }
}
