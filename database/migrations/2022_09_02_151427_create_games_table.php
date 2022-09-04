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
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_name');
            $table->integer('winner_id')->unsigned()->index()->nullable();
            $table->integer('second_id')->unsigned()->index()->nullable();
            $table->integer('third_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('winner_id')->references('id')->on('teams');
            $table->foreign('second_id')->references('id')->on('teams');
            $table->foreign('third_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
