<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaPesawat')->nullable();
            $table->string('asal')->nullable();
            $table->string('tujuan')->nullable();
            $table->time('berangkat')->nullable();
            $table->time('tiba')->nullable();
            $table->integer('harga')->nullable();
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
        Schema::drop('tikets');
    }
}
