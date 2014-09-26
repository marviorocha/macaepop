<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create("status", function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->length(10)->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->bigInteger('status');
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
		Schema::drop('status');
	}

}
