<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyUsersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::table('users', function(Blueprint $table){

			// Countries table:
			$table->bigInteger('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('countries');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::table('users', function(Blueprint $table){

			// Countries table:
			$table->dropForeign(['country_id']);
			$table->dropColumn('country_id');
		});
	}
}
