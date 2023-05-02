<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditUser extends Component
{
    use WithFileUploads;
    public $user = [];
    public $photo_path1, $photo_path2, $photo_path3;

    public function __construct()
    {
        $user = Auth()->user();
        $this->user = User::find($user->id)->toArray();
    }

    public function render()
    {
        return view('livewire.user.edit-user');
    }

    public function update()
    {
        $this->validate([
            'user.name' => ['required', 'string', 'max:150'],
            'user.dni' => ['required', 'string', 'max:20'],
            'user.phone' => ['required', 'string', 'max:20'],
            'user.address' => ['required', 'string', 'max:255'],
            'user.birthdate' => ['required', 'date'],
            'user.email' => 'required',
        ]);

        $user = User::find($this->user['id']);

        if ($this->photo_path1 !== null) {
            if ($user->photo_path1) {
                $ruta = "public" . $user->photo_path1;
                if (file_exists("../" . $ruta)) {
                    unlink("../" . $ruta);
                }
            }
            $imagenes = $this->photo_path1->store('documents', 'public');
            $user->photo_path1 = Storage::url($imagenes);
            $this->reset('photo_path1');
        }
        if ($this->photo_path2 !== null) {
            if ($user->photo_path2) {
                $ruta = "public" . $user->photo_path2;
                if (file_exists("../" . $ruta)) {
                    unlink("../" . $ruta);
                }
            }
            $imagenes = $this->photo_path2->store('documents', 'public');
            $user->photo_path2 = Storage::url($imagenes);
            $this->reset('photo_path2');
        }
        if ($this->photo_path3 !== null) {
            if ($user->photo_path3) {
                $ruta = "public" . $user->photo_path3;
                if (file_exists("../" . $ruta)) {
                    unlink("../" . $ruta);
                }
            }
            $imagenes = $this->photo_path3->store('documents', 'public');
            $user->photo_path3 = Storage::url($imagenes);
            $this->reset('photo_path3');
        }

        $user->name=$this->user['name'];
        $user->email=$this->user['email'];
        $user->dni=$this->user['dni'];
        $user->phone=$this->user['phone'];
        $user->address=$this->user['address'];
        $user->birthdate=$this->user['birthdate'];
        $user->save();
        $this->user=$user->toArray();
        $this->openModal();
    }

    public function openModal(){
        $action='Editar usuario';
        $message='La informacion del usuario ha sido actualizada exitosamente';
        $this->emit('openModal',$action,$message);
    }
}
