<?php

namespace App\Http\Livewire\EventPhotographer;

use Livewire\Component;

use Livewire\WithFileUploads;
use Intervention\Image\Image;


class Index extends Component
{

    use WithFileUploads;
    public $photography;

    public function render()
    {
        return view('livewire.event-photographer.index');
    }

    public function upload()
    {
        // $this->validate([
        //     'photography' => 'image|max:1024', // Validación de la imagen
        // ]);

        // // Código para guardar la imagen en el servidor
        
        // $this->photography = null; // Limpiar la variable después de la carga exitosa


        $this->validate([
            'photography' => 'image|max:1024', // Validación de la imagen
        ]);

        $image = Image::make($this->photography->getRealPath());
        $image->fit(300, 350); // Redimensionar y recortar la imagen a 800x600 píxeles
        //$image->save(); // Guardar la imagen en el servidor

        $this->photography = null; // Limpiar la variable después de la carga exitosa
    }
}
