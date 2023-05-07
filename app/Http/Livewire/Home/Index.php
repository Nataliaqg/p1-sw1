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
        $this->user = User::find($user->id);
        $isPhotographer=$this->user->Photographer;
        //dd($isPhotographer);
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
