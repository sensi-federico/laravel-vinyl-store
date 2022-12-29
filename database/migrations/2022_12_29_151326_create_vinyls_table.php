<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinyls', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->text('cover');
            $table->string('duration', 6);
            $table->text('genre');
            $table->string('language');
            $table->timestamps();
        });


        /**
         * Titolo
         * Artista
         * Immagine
         * Numero canzoni
         * Lista Canzoni
         * Lingua
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinyls');
    }
};
