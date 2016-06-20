<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyerPhotosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flyer_photos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('flyer_id')->unsigned();
			$table->string('name');
			$table->string('photo_path');
			$table->string('thumb_path');
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
		Schema::table('flyer_photos', function (Blueprint $table) {

		});
	}
}
