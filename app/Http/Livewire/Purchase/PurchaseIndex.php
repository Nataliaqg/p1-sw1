<?php

namespace App\Http\Livewire\Purchase;

use Livewire\Component;

class PurchaseIndex extends Component
{
    protected $listeners = [
        'closePurchaseInfo',
    ];
    public $showPurchaseInfo=false;
    public $showIndex=true;
    public function render()
    {
        return view('livewire.purchase.purchase-index');
    }
    public function showPurchaseInfo(){
        $this->showPurchaseInfo=true;
        $this->showIndex=false;
    }
    public function closePurchaseInfo(){
        $this->showPurchaseInfo=false;
        $this->showIndex=true;
    }
}
