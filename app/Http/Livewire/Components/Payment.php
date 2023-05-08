<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Payment extends Component
{
    public $openPaymentModal;
    protected $listeners = [
        'openPaymentModal',
    ];
    public $price;
    public $emit;

    public function render()
    {
        return view('livewire.components.payment');
    }

    public function openPaymentModal($price,$emitCallback){
        $this->price=$price;
        $this->emit=$emitCallback;
        $this->openPaymentModal=true;
    }
    public function closePaymentModal(){
        $this->openPaymentModal=false;
    }
    public function accept(){
        $this->emit($this->emit);
        $this->closePaymentModal();
    }
}
