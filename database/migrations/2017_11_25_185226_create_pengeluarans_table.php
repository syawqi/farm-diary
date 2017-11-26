<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengeluaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pengeluarans', function (Blueprint $table) {
          $table->increments('id');
          $table->string('sumber');
          $table->integer('farms_id');
          $table->integer('total');
          $table->string('unit');
          $table->integer('pengeluaran');
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
      Schema::dropIfExists('pengeluarans');
    }
}
