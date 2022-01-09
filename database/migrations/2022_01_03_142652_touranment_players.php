<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TouranmentPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_players', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tournament');
            $table->foreign('tournament')->references('id')->on('tournaments');

            $table->unsignedBigInteger('user');
            $table->foreign('user')->references('id')->on('users');

            $table->string('nickname');
            $table->string('game_id');

            $table->string('entered')->default(0);

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
        Schema::table('tournament_players', function (Blueprint $table) {
            //
        });
    }
}
