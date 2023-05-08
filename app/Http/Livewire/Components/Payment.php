<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Payment extends Component
{
    public $openPaymentModal;
    protected $listeners = [
        'openPaymentModal',
    ];

    public function render()
    {
        return view('livewire.components.payment');
    }

    public function openPaymentModal(){
        $this->openPaymentModal=true;
    }
    public function closePaymentModal(){
        $this->openPaymentModal=false;
    }
}
