<?php

namespace App\Http\Livewire\Photographer;

use App\Models\Event;
use App\Models\Event_Photographer;
use App\Models\Photographer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowPhotographer extends Component
{
    public $openModalShowPhotographer;
    public $authUserId;
    public $userGuestId;
    public $userPhotographers;
    public $event_id;

    protected $listeners = [
        'openModalShowPhotographer',
    ];

    public function mount($event_id)
    {
        $this->event_id = $event_id;
    }
    public function render()
    {
        //trae el evento
        $event = Event::find($this->event_id);
        //trae la coleccion de los photographer_id de la tabla intermedia eventphotographer que estan asociados a ese evento
        $eventPhotographers = Event_Photographer::select('photographer_id')->where('event_id',$this->event_id)->get();
        //dd($eventPhotographers);
        //trae coleccion de los user_id de photographer que no estan dentro de la coleccion de eventphotographers y que son fotografos activos
        $photographersAvailable = Photographer::select('user_id')->whereNotIn('id', $eventPhotographers)->where('status', true)->get();
        //dd($photographersAvailable);
        //obtenemos los fotografos que no estan asociados a este evento y que no seamos nosotros los organizadores con perfil de fotografo
        $this->userPhotographers = User::whereIn('id', $photographersAvailable)->where('id', '<>', Auth::id())->get();
        //dd($this->userPhotographers);


        return view('livewire.photographer.show-photographer');
    }

    public function addPhotographer($id)
    {
        //recibe el fotografo y crea un nuevo registro en Event_photographer con solicitud false
        Event_Photographer::create([
            'event_id' => $this->event_id,
            'photographer_id' => $id,
        ]);

         $this->emit('refreshPhotographersList');
    }

    public function openModalShowPhotographer()
    {
        $this->openModalShowPhotographer = true;
    }
    public function closeModal()
    {
        $this->openModalShowPhotographer = false;
        $this->emit('refresh');
    }
}
