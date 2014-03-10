<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('scores', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('game_instance_id')->unsigned();
			$table->integer('team_id')->unsigned();
			$table->integer('badge_id')->unsigned();
			$table->integer('score');
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
	    Schema::drop('scores');
	}

}
