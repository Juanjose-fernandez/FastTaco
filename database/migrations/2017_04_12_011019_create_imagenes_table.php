<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesTable extends Migration
{
    public function up()
    {
        Schema::create('imagenes', function ($table) {
            $table->increments('id');
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('imagenes');
    }
}
