<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHobPeopleCitiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hob_peopleCitiesConnections', function(Blueprint $table)
		{
			$table->foreign('hobby_id', 'fk_hob_peopleCitiesConnections_hob_hobbies1')->references('id')->on('hob_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('people_id', 'fk_hob_peopleCitiesConnections_hob_people')->references('id')->on('hob_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hob_peopleCitiesConnections', function(Blueprint $table)
		{
			$table->dropForeign('fk_hob_peopleCitiesConnections_hob_hobbies1');
			$table->dropForeign('fk_hob_peopleCitiesConnections_hob_people');
		});
	}

}
