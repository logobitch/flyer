<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlePhotosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('cover');
			$table->string('cover_thumb');
			$table->integer('article_id')->unsigned();
			$table->integer('destinction_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('photos', function (Blueprint $table) {
			//
		});
	}
}
