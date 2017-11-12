<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

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


        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12341234'),
        ]);


        User::create([
            'name' => 'Jorge Gomez',
            'email' => 'jorge@gmail.com',
            'password' => bcrypt('12341234'),
        ]);
    }
}
