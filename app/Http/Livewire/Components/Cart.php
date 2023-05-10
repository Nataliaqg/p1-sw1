<?php

namespace App\Http\Livewire\Components;

use App\Models\Photography;
use App\Models\User_Photography;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Carbon\Carbon;

class Cart extends Component
{

    public $totalPurchase;
    public $items=[];
    protected $listeners = [
        'addCart',
        'acceptPaymentPurchase'
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
        $user=Auth()->user();
        $currentDateTime = Carbon::now();
        foreach ($this->items as $item) {
            User_Photography::create([
                'date'=> $currentDateTime->format('Y-m-d'),
                'time'=> $currentDateTime->format('H:i:s'),
                'user_id'=> $user->id,
                'photography_id'=>$item
            ]);
        }
    }
    
}
