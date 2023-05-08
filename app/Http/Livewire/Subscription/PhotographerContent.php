<?php

namespace App\Http\Livewire\Subscription;

use Livewire\Component;

class PhotographerContent extends Component
{
    public function render()
    {
        return view('livewire.subscription.photographer-content');
    }
    public function openPaymentModal(){
        $this->emit('openPaymentModal');
    }
}
