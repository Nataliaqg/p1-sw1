<?php

namespace App\Http\Livewire\Photographer;

use App\Models\Photographer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowPhotographer extends Component
{
    public $openModalShowPhotographer;
    public $authUserId;
    public $userGuestId;
    public $userPhotographers;

    protected $listeners = [
        'openModalShowPhotographer',
    ];

    public function mount()
    {
        //Traigo todos los fotografos con status true, y si yo aparte de ser organizadora soy fotografa
        //no me trae a mi misma
        $authUserId = Auth::id();
        $this->userPhotographers = User::whereHas('photographer', function ($query) {
            $query->where('status', true);
        })->where('id', '!=', $authUserId)->get();
        //dd($this->userPhotographers);
    }
    public function render()
    {
        return view('livewire.photographer.show-photographer');
    }

    public function openModalShowPhotographer()
    {
        $this->openModalShowPhotographer = true;
    }
    public function closeModal()
    {
        $this->openModalShowPhotographer = false;
        $this->emit('refresh');
    }
}
