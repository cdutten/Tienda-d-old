<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */

    public function run()
    {

       Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Cuenta con todos los privilegios',
        ]);

        Role::create([
            'name' => 'vendedor',
            'display_name' => 'Vendedor',
            'description' => 'Solo cuenta con la posibilidad de agregar productos',
        ]);

        Role::create([
            'name' => 'cliente',
            'display_name' => 'Cliente',
            'description' => 'Solo cuenta con la posibilidad de ver Front-end',
        ]);
    }
}