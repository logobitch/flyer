<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 30);
			$table->string('introduce');
		});


		Schema::create('article_tag', function (Blueprint $table) {
			$table->integer('article_id');
			$table->integer('tag_id');
			$table->primary(array('article_id', 'tag_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tags', function (Blueprint $table) {
			//
		});
	}
}
