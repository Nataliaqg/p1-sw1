<?php

namespace App\Http\Livewire\EventPhotographer;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use Livewire\WithFileUploads;
use Intervention\Image\Image;
use App\Models\Photography;

class Index extends Component
{

    use WithFileUploads;
    public $photography;
    public $openModal;
    public $event_id;
    //
    public $eventPhotographies=[];
    
    protected $listeners = [
        'openModal',
    ];

    public function mount($event_id){
        $this->event_id=$event_id;
    }

    public function render()
    {
        return view('livewire.event-photographer.index');
    }

    public function store(){
        
        $imagenes = $this->photography->store('documents', 'public');
        $url = Storage::url($imagenes);
        $user = Auth()->user();
        $photographer=$user->Photographer;
        $photography=Photography::create([
            'price'=>$this->eventPhotographies['price'],
            'status'=>$this->eventPhotographies['status'],
            'url_path'=>$url,
            'event_id'=>$this->event_id,
            'photographer_id'=>$photographer->id
        ]);
        $this->emit('recognize',$this->event_id, $photography);
        $this->closeModal();
    }

    public function upload()
    {
        $this->validate([
            'photography' => 'image|max:1024', // Validación de la imagen
        ]);

        $image = Image::make($this->photography->getRealPath());
        $image->fit(300, 350); // Redimensionar y recortar la imagen a 800x600 píxeles
        //$image->save(); // Guardar la imagen en el servidor

        //$this->photography = null; // Limpiar la variable después de la carga exitosa
    }

    public function openModal(){
        $this->openModal=true;

    }

    public function closeModal(){
        $this->openModal=false;
        $this->emit('refresh');
    }
}
