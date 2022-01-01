<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTounramentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tournament');
            $table->foreign('tournament')->references('id')->on('tournaments');

            $table->string('card', 255);
            $table->string('card_code', 255);

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
        Schema::table('tournament_details', function (Blueprint $table) {
            //
        });
    }
}
