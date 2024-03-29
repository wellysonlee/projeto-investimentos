<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

			//people data
			$table->char('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->nullable();

			//auth data
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();

			//permission
			$table->string('status')->default('active');
			$table->straing('permission')->default('app.user');

			$table->rememberToken();
            $table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
		});
		Schema::drop('users');
	}
};
