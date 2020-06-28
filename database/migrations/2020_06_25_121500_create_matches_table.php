<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create the matches table in the database. define column names, data types, and defaults
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->integer('team_size')->default(5);
            $table->string('team_a_name', 50)->default('Team A');
            $table->string('team_b_name', 50)->default('Team B');
            $table->integer('team_a_score')->default(0);
            $table->integer('team_b_score')->default(0);
            $table->boolean('game_complete')->default(false);
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
        Schema::dropIfExists('matches');
    }
}
