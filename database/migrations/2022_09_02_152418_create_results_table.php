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
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned()->index();
            $table->integer('team_one_id')->unsigned()->index();
            $table->integer('team_two_id')->unsigned()->index();
            $table->integer('team_one_score')->default(0);
            $table->integer('team_two_score')->default(0);
            $table->integer('round');
            $table->integer('team_winner_id')->unsigned()->index();
            $table->integer('team_loser_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('team_one_id')->references('id')->on('teams');
            $table->foreign('team_two_id')->references('id')->on('teams');
            $table->foreign('team_winner_id')->references('id')->on('teams');
            $table->foreign('team_loser_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
};
