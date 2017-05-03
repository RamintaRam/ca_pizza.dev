<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaPizzaCheeseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ca_pizza_cheese', function(Blueprint $table)
		{
			$table->foreign('id', 'fk_ca_pizza_cheese_ca_pizza')->references('cheese_id')->on('ca_pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ca_pizza_cheese', function(Blueprint $table)
		{
			$table->dropForeign('fk_ca_pizza_cheese_ca_pizza');
		});
	}

}
