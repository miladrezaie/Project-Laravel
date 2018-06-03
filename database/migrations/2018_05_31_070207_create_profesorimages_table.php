<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesorimages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profosor_id')->unsigned();
            $table->foreign('profosor_id')->references('id')->on('profosors')->onDelete('cascade')->onUpdate('cascade');
            $table->text('name');
            $table->text('size');
            $table->text('type');
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
        Schema::dropIfExists('profesorimages');
    }
}
