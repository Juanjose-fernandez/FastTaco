<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creamos la tabla para almacenar los roles
        Schema::create('lineas_ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->string('unidades');
            $table->timestamps();

            //FK
            $table->foreign('ticket_id')->references('id')->on('tickets')
                ->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lineas_ticket');
    }
}
