<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destinations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('parent_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()  
	{
		Schema::table('destinations', function (Blueprint $table) {
			//
		});
	}
}
