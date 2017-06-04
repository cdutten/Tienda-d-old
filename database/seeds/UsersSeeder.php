<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([  
            'name' => 'Cesar Dutten',
            'email' => 'cdutten@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
        $role = Role::where('name', '=', 'admin')->first();
        $user = User::where('name', '=', 'Cesar Dutten')->first();
        
        $user->attachRole( $role);

        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
        $role = Role::where('name', '=', 'vendedor')->first();
        $user = User::where('name', '=', 'Juan Perez')->first();
        
        $user->attachRole( $role);

        User::create([
            'name' => 'Jorge Gomez',
            'email' => 'jorge@gmail.com',
            'password' => bcrypt('12341234'),
        ]);

        $role = Role::where('name', '=', 'cliente')->first();
        $user = User::where('name', '=', 'Jorge Gomez')->first();
        
        $user->attachRole( $role);
    }
}
