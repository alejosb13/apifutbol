<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'caja';
        $role->description = 'Personal de caja';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->description = 'Persona natural';
        $role->save();
    }
}
