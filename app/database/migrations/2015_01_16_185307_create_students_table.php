<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code',150);
			$table->string('fname',150);
			$table->string('mname',150);
			$table->string('lname',150);
			$table->string('class',150);
			$table->string('section',150);
			$table->string('roll_no',150);
			$table->string('email',150);
			$table->string('address',150);
			$table->string('phone', 150);
			$table->string('religion', 150);
			$table->timestamps();
			$table->softDeletes();
		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
