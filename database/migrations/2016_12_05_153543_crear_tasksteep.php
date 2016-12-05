<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTasksteep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasksteeps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idstepstate');
            $table->integer('idtaskmailbox');
            $table->integer('iduser');
            $table->integer('idaction');
            $table->integer('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasksteeps');
    }
}
