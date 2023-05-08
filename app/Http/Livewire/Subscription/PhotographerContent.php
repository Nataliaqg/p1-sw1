<?php

namespace App\Http\Livewire\Subscription;

use App\Models\Photographer;
use App\Models\User;
use Livewire\Component;

class PhotographerContent extends Component
{
    public $total=140;
    protected $listeners = [
        'acceptPaymentPhotographer',
    ];

    public function render()
    {
        return view('livewire.subscription.photographer-content');
    }
    public function openPaymentModalPhotographer(){
        $emitCallback="acceptPaymentPhotographer";
        $this->emit('openPaymentModal',$this->total,$emitCallback);
    }
    public function acceptPaymentPhotographer(){
        $user=User::find(Auth()->user()->id);
        $user->assignRole('Fotografo');
        $user->save();
        $photographer= Photographer::where('user_id',$user->id)->first();
        $photographer->status=true;
        $photographer->save();
    }
}
