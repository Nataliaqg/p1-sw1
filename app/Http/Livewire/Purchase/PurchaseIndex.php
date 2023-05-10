<?php

namespace App\Http\Livewire\Purchase;

use App\Models\User;
use App\Models\User_Photography;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PurchaseIndex extends Component
{
    
    public function render()
    {
        $user=User::find(Auth()->user()->id);
        // $images= User_Photography::where('user_id',$user->id)->join('photographies','user_photography.photography_id','photographies.id')->get();
        //dd($images);

        $images=$user->Photographies;
        return view('livewire.purchase.purchase-index',compact('images'));
    }
   
}
