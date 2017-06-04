<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\productos;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=1; $i <= 100; $i++) {
             productos::create([
            'nombre' => "Producto $i",
            'descripcionBreve' => 'Descripcion breve',
            'descripcion' => 'Descripcion completa y mayor a 10 letras',
            'precio' => 10,
          	]);
    	}
    }
}
