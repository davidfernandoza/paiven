<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTrmTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::table('trm', function(Blueprint $table){

			// Countries table:
			$table->bigInteger('country_id')->unsigned();
			$table->foreign('country_id')->references('id')->on('countries');

			// Users table:
			$table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::table('trm', function(Blueprint $table){
			// Countries table:
			$table->dropForeign(['country_id']);
			$table->dropColumn('country_id');

			// Users table:
			$table->dropForeign(['user_id']);
			$table->dropColumn('user_id');
		});
	}
}
