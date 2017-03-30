<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaPiezas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piezas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->text('texto');
          $table->string('foto');
          $table->string('url');
          $table->timestamps();
        });

          // Piezas y tags

          Schema::create('pieza_tag', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('pieza_id')->unsigned();
              $table->integer('tag_id')->unsigned();
              $table->foreign('pieza_id')->references('id')->on('pelusis');
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
        Schema::dropIfExists('piezas');
        Schema::dropIfExists('pieza_tag');
    }
}
