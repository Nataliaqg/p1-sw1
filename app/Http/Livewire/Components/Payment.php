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
    public $numeroTarjeta;
    public $payment=[];

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
        $this->validate([
            'payment.name' => ['required', 'string', 'max:255'],
            'payment.card-number' => ['required', 'string', 'regex:/^\d{4} \d{4} \d{4} \d{4}$/'],
            'payment.expiration-date' => ['required', 'regex:/^\d{2}\/\d{2}$/'],
            'payment.cvc' => ['required', 'string', 'digits_between:3,4'],
        ]);        
        
        $this->emit($this->emit);
        $this->closePaymentModal();
    }
}
