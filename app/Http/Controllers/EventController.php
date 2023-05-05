<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Event_Guest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function acceptInvitation($event_id)
    {   
        $event = Event::find($event_id);
        //si el evento no existe lo redirige a una vista de error
        if (!$event) {
            return view('error');
        }
        //saca el user, pq ese usuario es el invitado
        $userAuth = Auth()->user();
        $user = User::find($userAuth->id);
        $guest = $user->Guest;
        //aqui le hacemos una busqueda de mis invitados del evento
        $event_guest = Event_Guest::where('guest_id', $guest->id)
            ->where('event_id', $event->id)
            ->get()
            ->first();
        //si este usuario no esta registado como invitado, lo regista
        if (!$event_guest) {
            Event_Guest::create([
                'guest_id' => $guest->id,
                'event_id' => $event->id
            ]);
        }
        //lo redirige a la vista general del evento
        return redirect(route('event.show', $event_id));
    }

    public function show($event_id)
    {
        if (!$event_id) {
            return view('error');
        }
        return view('event.show', compact('event_id'));
    }


    public function index()
    {
        return view('event.index');
    }
}
