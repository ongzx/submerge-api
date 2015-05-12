<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubmissionColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('submissions', function(Blueprint $table)
		{
			//
			$table->string('answer_1');
			$table->string('answer_2');
			$table->string('answer_3');
			$table->string('answer_4');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('submissions', function(Blueprint $table)
		{
			//
			
			$table->dropColumn('answer_1');
			$table->dropColumn('answer_2');
			$table->dropColumn('answer_3');
			$table->dropColumn('answer_4');
		});
	}

}
