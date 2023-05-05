<?php

namespace App\Http\Livewire\Home;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $user = [];
    public function __construct()
    {
        $user = Auth()->user();
        $this->user = User::find($user->id)->toArray();
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
