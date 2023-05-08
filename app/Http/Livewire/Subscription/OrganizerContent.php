<?php

namespace App\Http\Livewire\Subscription;

use App\Models\Organizer;
use App\Models\User;
use Livewire\Component;

class OrganizerContent extends Component
{
    public $total=70;
    protected $listeners = [
        'acceptPaymentOrganizer',
    ];
    public function render()
    {
        return view('livewire.subscription.organizer-content');
    }

    public function openPaymentModalOrganizer(){
        $emitCallback="acceptPaymentOrganizer";
        $this->emit('openPaymentModal',$this->total,$emitCallback);
    }
    public function acceptPaymentOrganizer(){
        $user=User::find(Auth()->user()->id);
        $user->assignRole('Organizador');
        $user->save();
        $organizer= Organizer::where('user_id',$user->id)->first();
        $organizer->status=true;
        $organizer->save();
    }
}
