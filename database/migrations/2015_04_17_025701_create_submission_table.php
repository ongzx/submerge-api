<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissions', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('fb_id',100)->unique();
			$table->string('fb_token',255)->unique();
			$table->string('f_name',30);
			$table->string('l_name',30);
			$table->string('address');
			$table->string('email',50);
			$table->string('mobile',10);
			$table->string('country',5);
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
		Schema::drop('submissions');
		
	}

}
