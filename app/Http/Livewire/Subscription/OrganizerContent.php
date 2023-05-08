<?php

namespace App\Http\Livewire\Subscription;

use App\Models\User;
use Livewire\Component;

class OrganizerContent extends Component
{
    protected $listeners = [
        'acceptPaymentOrganizer',
    ];
    public function render()
    {
        return view('livewire.subscription.organizer-content');
    }

    public function openPaymentModalOrganizer(){
        $emitCallback="acceptPaymentOrganizer";
        $this->emit('openPaymentModal',300,$emitCallback);
    }
    public function acceptPaymentOrganizer(){
        $user=User::find(Auth()->user()->id);
        $user->assignRole('Organizador');
        $user->save();
    }
}
