<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ca_pizza', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_ca_pizza_ca_pizza_cheese1')->references('id')->on('ca_pizza_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pad_id', 'fk_ca_pizza_ca_pizza_pad')->references('id')->on('ca_pizza_pad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ca_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_ca_pizza_ca_pizza_cheese1');
			$table->dropForeign('fk_ca_pizza_ca_pizza_pad');
		});
	}

}
