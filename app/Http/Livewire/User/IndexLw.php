<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class IndexLw extends Component
{   
    public $showUser=true;
    public $showEdit=false;

    protected $listeners = [
        'openShowUser',
        'openEditUser'
    ];

    public function render()
    {
        return view('livewire.user.index-lw');
    }
    public function openEditUser($showEdit){
        $this->showUser=false;
      $this->showEdit=$showEdit;
    }
    public function openShowUser($showUser){
        $this->showEdit=false;
       $this->showUser=$showUser;
    }
}
