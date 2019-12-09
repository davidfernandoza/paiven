<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 45);
			$table->string('email', 100)->unique();
			$table->string('password');
			$table->string('email_password');
			$table->string('phone', 15);
			$table->boolean('status')->default(1);
			$table->boolean('visible')->default(0);
			$table->enum('rol', ['ADMIN', 'BASIC'])->default('BASIC');
			$table->string('avatar', 255)->default('images/avatars/default.svg');
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}
}
