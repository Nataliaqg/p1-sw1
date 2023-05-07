<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Invitado']);
        $role2 = Role::create(['name' => 'Organizador']);
        $role3 = Role::create(['name' => 'Fotografo']);

        //permisos ORGANIZADOR
        Permission::create(['name'=>'event.organizerEvents'])->syncRoles([$role2]);
        Permission::create(['name'=>'event.create'])->syncRoles([$role2]);
        Permission::create(['name'=>'event.edit'])->syncRoles([$role2]);
        Permission::create(['name'=>'event.showQr'])->syncRoles([$role2]);
        Permission::create(['name'=>'event.addPhotographer'])->syncRoles([$role2]);

        //permisos FOTOGRAFO
        Permission::create(['name'=>'event.photographerEvents'])->syncRoles([$role3]);
        Permission::create(['name'=>'event.addPhotography'])->syncRoles([$role3]);

        //permisos INVITADO
        Permission::create(['name'=>'event.guestEvents'])->syncRoles([$role1]);
    }
}
