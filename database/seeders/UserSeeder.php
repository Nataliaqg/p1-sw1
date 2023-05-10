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
        ///////////////////////////////////////////////////////////////////////////

        $user = User::create([
            'name' => "Natalia",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "natalia@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole(['Invitado', 'Organizador', 'Fotografo']);
        Photographer::create([
            'user_id' => $user->id,
            'status' => true
        ]);
        Guest::create([
            'user_id' => $user->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user->id,
            'status' => true
        ]);
        ///////////////////////////////////////////////////////////////////////////
        $user2 = User::create([
            'name' => "Invitado1",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "invitado1@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole('Invitado');
        Photographer::create([
            'user_id' => $user2->id,
        ]);
        Guest::create([
            'user_id' => $user2->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user2->id,
        ]);
        ///////////////////////////////////////////////////////////////////////////
        $user3 = User::create([
            'name' => "Invitado2",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "invitado2@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole('Invitado');
        Photographer::create([
            'user_id' => $user3->id,
        ]);
        Guest::create([
            'user_id' => $user3->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user3->id,
        ]);
        ///////////////////////////////////////////////////////////////////////////

        $user4 = User::create([
            'name' => "Fotografo1",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "fotografo1@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole(['Invitado', 'Fotografo']);
        Photographer::create([
            'user_id' => $user4->id,
            'status' => true,
        ]);
        Guest::create([
            'user_id' => $user4->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user4->id,
        ]);
        ///////////////////////////////////////////////////////////////////////////
        
        $user5 = User::create([
            'name' => "Fotografo2",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "fotografo2@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole(['Invitado', 'Fotografo']);
        Photographer::create([
            'user_id' => $user5->id,
            'status' => true,
        ]);
        Guest::create([
            'user_id' => $user5->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user5->id,
        ]);
        ///////////////////////////////////////////////////////////////////////////
        $user6 = User::create([
            'name' => "Organizador",
            'dni' => "123456",
            'phone' => "123456",
            'address' => "Av Paragua",
            'birthdate' => "1999-11-29",
            'email' => "organizador@gmail.com",
            'password' => Hash::make("12345678"),
        ])->assignRole(['Invitado', 'Organizador']);
        Photographer::create([
            'user_id' => $user6->id,
        ]);
        Guest::create([
            'user_id' => $user6->id,
            'status' => true,
        ]);
        Organizer::create([
            'user_id' => $user6->id,
            'status' => true,
        ]);
        ///////////////////////////////////////////////////////////////////////////

    }
}
