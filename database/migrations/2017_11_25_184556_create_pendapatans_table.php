<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendapatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farms_id');
            $table->string('sumber');
            $table->integer('total');
            $table->string('unit');
            $table->integer('pendapatan');
            $table->date('date');
            $table->string('month');
            $table->string('years');
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
      Schema::dropIfExists('pendapatans');
    }
}
