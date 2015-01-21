<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTeacherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('section_teacher', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('section_id');
			$table->integer('teacher_id');
			$table->timestamps();
			
		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('section_teacher');	
	}

}
