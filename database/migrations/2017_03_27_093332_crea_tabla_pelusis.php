<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaPelusis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelusis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('historia');
            $table->string('foto');
            $table->boolean('creepy');
            $table->timestamps();
        });

        // Tags

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        // Pelusis y tags

        Schema::create('pelusi_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelusi_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('pelusi_id')->references('id')->on('pelusis');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('pelusis');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('pelusi_tag');
    }
}
