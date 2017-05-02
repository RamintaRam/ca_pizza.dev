<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHobPeopleCitiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hob_peopleCitiesConnections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->string('people_id', 36)->index('fk_hob_peopleCitiesConnections_hob_people');
			$table->string('hobby_id', 36)->index('fk_hob_peopleCitiesConnections_hob_hobbies1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hob_peopleCitiesConnections');
	}

}
