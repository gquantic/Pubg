<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Games extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            /*
             * Info
             */

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url')->nullable();

            /*
             * Images
             */

            $table->string('logo_big');
            $table->string('logo_small')->nullable();

            $table->string('cover_big')->nullable();
            $table->string('cover_small')->nullable();

            /*
             * Timestamps
             */

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
        Schema::table('games', function (Blueprint $table) {
            //
        });
    }
}
