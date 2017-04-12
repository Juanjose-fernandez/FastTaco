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

        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->float('precio');
            $table->integer('imagen_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();

            //FK
            $table->foreign('categoria_id')
                ->references('id')->on('categorias')
                ->onDelete('cascade');

            $table->foreign('imagen_id')
                ->references('id')->on('imagenes')
                ->onDelete('cascade');

            //indices
            $table->index('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
