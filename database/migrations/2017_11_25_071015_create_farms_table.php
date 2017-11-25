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
          $table->date('date');
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
        Schema::create('farms-realization-detail', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('farmrealization_id');
          $table->integer('week');
          $table->date('date');
          $table->string('value');
          $table->timestamps();
        });

        Schema::create('farms-harvest', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('farmrealization_id');
          $table->integer('week');
          $table->string('month');
          $table->string('years');
          $table->date('date');
          $table->integer('total');
          $table->string('unit');
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
      Schema::dropIfExists('farms-realization-detail');
      Schema::dropIfExists('farms-harvest');
    }
}
