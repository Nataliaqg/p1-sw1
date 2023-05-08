<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Payment extends Component
{
    public $openPaymentModal;
    protected $listeners = [
        'openPaymentModal',
    ];
    public $total;
    public $emit;

    public function render()
    {
        return view('livewire.components.payment');
    }

    public function openPaymentModal($total,$emitCallback){
        $this->total=$total;
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
