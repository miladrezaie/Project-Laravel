<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profosor_id')->unsigned();
            $table->foreign('profosor_id')->references('id')->on('profosors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('family');
            $table->string('degree');
            $table->string('location_birth');
            $table->string('birthday');
            $table->string('address');
            $table->integer('mobile');
            $table->string('email');
            $table->string('contact');
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
        Schema::dropIfExists('degrees');
    }
}
