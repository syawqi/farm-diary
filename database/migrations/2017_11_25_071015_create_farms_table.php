<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('users_id');
          $table->string('name');
          $table->integer('lenght');
          $table->integer('wide');
          $table->timestamps();
        });
        Schema::create('farms-plan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('farms_id');
          $table->string('name');
          $table->integer('total');
          $table->string('metode');
          $table->timestamps();
        });
        Schema::create('farms-realization', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('farms_id');
          $table->string('name');
          $table->integer('total');
          $table->string('metode');
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
      Schema::dropIfExists('farms');
      Schema::dropIfExists('farms-plan');
      Schema::dropIfExists('farms-realization');
    }
}
