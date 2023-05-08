<?php

namespace App\Http\Livewire\Purchase;

use Livewire\Component;

class PurchaseInfo extends Component
{
    public function render()
    {
        return view('livewire.purchase.purchase-info');
    }

    public function closePurchaseInfo(){
        $this->emit('closePurchaseInfo');
    }
}
