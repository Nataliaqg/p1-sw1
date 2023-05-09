<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use App\Models\Event_Photographer;
use App\Models\Photographer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RequestEventPhotographer extends Component
{
    public function render()
    {
        $user = Auth::user();
        //saco el id de mi perfil fotografo
        $myPhotographerId = $user->Photographer->id;
        $myRequests = Event_Photographer::where('photographer_id', $myPhotographerId)
            ->where('event_photographer.status', false)
            ->join('events', 'event_photographer.event_id', '=', 'events.id')
            ->join('organizers', 'events.organizer_id', '=', 'organizers.id')
            ->join('users', 'organizers.user_id', '=', 'users.id')
            ->select(
                'event_photographer.*',
                'events.name as event_nombre',
                'events.date as event_fecha',
                'events.time as event_hora',
                'events.address as event_direccion',
                'users.name as organizerUser_name',
                'users.phone as organizerUser_telefono',
                'users.email as organizerUser_email'
            )
            ->get();

        //dd($myRequests);
        return view('livewire.event-photographer.request-event-photographer', compact('myRequests'));
    }

    public function deleteRequest($event_id)
    {
        //recibe el id del evento y elimina registro en Event_photographer asociado a mi perfil fotografo
        $user = Auth()->user();
        $photographer = $user->Photographer;
        Event_Photographer::where('event_id', $event_id)
            ->where('photographer_id', $photographer->id)
            ->delete();
    }

    public function confirmRequest($event_id){
        //encuentra el registro y pone el estado como true de aceptado
        $user = Auth()->user();
        $photographer = $user->Photographer;
        $eventPhotographer=Event_Photographer::where('event_id', $event_id)
            ->where('photographer_id', $photographer->id)->first();
        $eventPhotographer->status=true;
        $eventPhotographer->save();
    }
}
