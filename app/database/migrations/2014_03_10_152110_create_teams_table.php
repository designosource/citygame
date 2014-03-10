<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('teams', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('game_id')->unsigned();
			$table->string('name');
			$table->string('password');
			$table->integer('start_question_id')->unsigned();
			$table->integer('game_instance_id')->unsigned();
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
	    Schema::drop('teams');
	}

}
