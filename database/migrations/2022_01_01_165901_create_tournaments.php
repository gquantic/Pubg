<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();

            /*
             | Game
             */
            $table->unsignedBigInteger('game');
            $table->foreign('game')->references('id')->on('games');

            /*
             | Tournament information
             */
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('cover')->nullable();
            $table->string("title", 256);
            $table->text('description')->nullable();

            /*
             | Maximum players in tournament
             */
            $table->integer('players_col')->default(10);

            /*
             | Prizes for winners
             */
            $table->integer('first_prize')->default(20);
            $table->integer('second_prize')->default(0);
            $table->integer('third_prize')->default(0);

            /*
             | Dates
             */
            $table->timestamp('start_date')->default(now());
            $table->timestamp('end_date');

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
        Schema::table('tournaments', function (Blueprint $table) {
            //
        });
    }
}
