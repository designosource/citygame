<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('questionFields', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->string('label');
			$table->string('type');
			$table->string('answer');
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
	    Schema::drop('questionFields');
	}

}
