<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('introduce');
			$table->text('content');
			$table->integer('destination_id')->default(0);
			$table->string('days', 20);
			$table->string('costs', 20);
			$table->string('starttime', 20)->comment('出发时间');
			$table->string('destination');
			$table->string('source');
			$table->integer('user_id')->default(0);
			$table->string('category_id');
			$table->integer('pv');
			$table->integer('orderby');
			$table->integer('orderby1');
			$table->timestamps();
			$table->timestamp('published_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function (Blueprint $table) {
			//
		});
	}
}
