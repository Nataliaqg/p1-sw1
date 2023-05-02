<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Organizer;
use App\Models\Photographer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name' => "Natalia",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "nataliaquirogag@gmail.com",
            'password' => Hash::make("1234"),
        ]);

        Photographer::create([
            'user_id'=>$user->id,
            'status'=>true,
        ]);
        Guest::create([
            'user_id'=>$user->id,
        ]);
        Organizer::create([
            'user_id'=>$user->id,
        ]);
    }
}
