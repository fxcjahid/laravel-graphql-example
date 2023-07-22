<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategories extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_categories', function (Blueprint $table) {
			$table->integer('post_id')->unsigned();
			$table->integer('categories_id')->unsigned();

			$table->primary(['post_id', 'categories_id']);
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('post_categories');
	}
}