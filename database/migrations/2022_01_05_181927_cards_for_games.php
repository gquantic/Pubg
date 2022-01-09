<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardsForGames extends Migration
{
    public function up()
    {
        Schema::create('game_cards', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('game');
            $table->foreign('game')->references('id')->on('games');

            $table->string('card');
            $table->string('card_name');
            $table->string('card_code');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_cards');
    }
}
