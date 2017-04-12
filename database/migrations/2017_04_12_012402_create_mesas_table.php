<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    public function up()
    {
        Schema::create('mesas', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mesas');
    }
}


