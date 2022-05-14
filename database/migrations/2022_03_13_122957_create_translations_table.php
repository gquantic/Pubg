<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tournament');
            $table->unsignedBigInteger('game');

            $table->foreign('tournament')->references('id')->on('tournaments');
            $table->foreign('game')->references('id')->on('games');

            $table->string('title');

            /**
             * @URLS
             */
            $table->string('youtube')->nullable();
            $table->string('twitch')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('discord')->nullable();

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
        Schema::dropIfExists('translations');
    }
}
