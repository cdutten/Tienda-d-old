<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcionBreve');
            $table->text('descripcion');
            $table->string('imagenDir')->default("imagen/default.jpg");
            $table->boolean('dst')->default("0");
            $table->integer('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('productos', function($table)
           {
          $table->dropColumn('id');
        });
    }
}
