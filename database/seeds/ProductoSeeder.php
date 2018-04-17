<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=1; $i <= 30; $i++) {
             Product::create([
            'name' => "Producto $i",
            'description_thumbnail' => 'Descripcion breve',
            'description' => 'Descripcion completa y mayor a 10 letras',
            'price' => 10,
          	]);
    	}
    }
}
