<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostComments extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_comments', function (Blueprint $table) {
			$table->integer('post_id')->unsigned();
			$table->unsignedBigInteger('comment_id');

			$table->primary(['post_id', 'comment_id']);
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('post_comments');
	}
}