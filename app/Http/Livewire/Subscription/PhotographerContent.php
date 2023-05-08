<?php

namespace App\Http\Livewire\Subscription;

use App\Models\User;
use Livewire\Component;

class PhotographerContent extends Component
{
    protected $listeners = [
        'acceptPaymentPhotographer',
    ];

    public function render()
    {
        return view('livewire.subscription.photographer-content');
    }
    public function openPaymentModalPhotographer(){
        $emitCallback="acceptPaymentPhotographer";
        $this->emit('openPaymentModal',150,$emitCallback);
    }
    public function acceptPaymentPhotographer(){
        $user=User::find(Auth()->user()->id);
        $user->assignRole('Fotografo');
        $user->save();
    }
}
