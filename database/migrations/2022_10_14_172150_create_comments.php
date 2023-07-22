<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComments extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('user_id');
			$table->integer('post_id')->unsigned();
			$table->text('text');
			$table->enum('status', ['publish', 'pending', 'trash'])->default('pending');
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comments');
	}
}