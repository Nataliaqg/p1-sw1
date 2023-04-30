<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class IndexLw extends Component
{
    public $edit=false;
    public $show=false;

    public function render()
    {
        return view('livewire.user.index-lw');
    }
    public function editUser(){
        $this->edit=true;
        $this->show=false;
    }
    public function showUser(){
        $this->show=true;
        $this->edit=false;
    }
}
