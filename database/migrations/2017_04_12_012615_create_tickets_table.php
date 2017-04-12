<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function ($table) {
            $table->increments('id');
            $table->integer('mesa_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->float('total');
            $table->timestamps();
            //FK
            $table->foreign('mesa_id')
                ->references('id')->on('mesas')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::drop('tickets');

    }
}
