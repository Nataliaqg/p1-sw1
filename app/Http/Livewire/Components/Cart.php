<?php

namespace App\Http\Livewire\Components;

use App\Models\Photography;
use Livewire\Component;

class Cart extends Component
{
    public $totalPurchase;
    public $items=[];
    protected $listeners = [
        'addCart',
    ];
    public function render()
    {
        $images=Photography::whereIn('id',$this->items)->get();
        $total=$images->Sum('price');
        $this->totalPurchase=$total;
        return view('livewire.components.cart',compact('images','total'));
    }
    public function addCart($id){
        if (!in_array($id, $this->items)) {
            array_push($this->items,$id);
        }
    }
    public function delete($id){
        $index = array_search($id, $this->items);
        if ($index !== false) {
            array_splice($this->items, $index, 1);
        }
    }
    
  
    public function openPaymentModalPurchase(){
        $emitCallback="acceptPaymentPurchase";
        $this->emit('openPaymentModal',$this->totalPurchase,$emitCallback);
    }
    public function acceptPaymentPurchase(){
        // $user=User::find(Auth()->user()->id);
        // $user->assignRole('Organizador');
        // $user->save();
    }
    
}
