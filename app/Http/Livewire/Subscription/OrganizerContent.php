<?php

namespace App\Http\Livewire\Subscription;

use Livewire\Component;

class OrganizerContent extends Component
{
    public function render()
    {
        return view('livewire.subscription.organizer-content');
    }

    public function openPaymentModalOrganizer(){
        $this->emit('openPaymentModal');
    }
}
