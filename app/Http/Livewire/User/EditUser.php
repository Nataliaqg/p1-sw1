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
        //dd($user);
        return view('livewire.user.edit-user');
    }

    public function update()
    {
        $this->validate([
            'user.name' => 'required',
            'user.birthday' => 'required',
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
        }

        $user->name=$this->user['name'];
        $user->birthday=$this->user['birthday'];
        $user->save();
        $this->user=$user->toArray();
    }
}
