<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code',150);
			$table->string('fname',150);
			$table->string('mname',150);
			$table->string('lname',150);
			$table->string('email',150);
			$table->string('address',150);
			$table->string('phone_1',150);
			$table->string('phone_2',150);
			$table->string('religion',150);
			$table->string('occupation', 150);
			$table->string('user_type', 150);
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
		Schema::drop('parents');
	}

}
