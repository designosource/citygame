<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('settings', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('game_id')->unsigned()->unique();
			$table->string('primary_color');
			$table->string('secondary_color');
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
	    Schema::drop('settings');
	}

}