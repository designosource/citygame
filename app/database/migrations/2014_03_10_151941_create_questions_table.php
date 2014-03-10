<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('questions', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('game_id')->unsigned();
			$table->text('instructions');
			$table->string('question');
			$table->string('location');
			$table->integer('order');
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
	    Schema::drop('questions');
	}

}
