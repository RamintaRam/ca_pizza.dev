<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaPizzaIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ca_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->foreign('pizza_id', 'fk_ca_pizza_ingredients_connections_ca_pizza1')->references('id')->on('ca_pizza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredients_id', 'fk_ca_pizza_ingredients_connections_ca_pizza_ingredients1')->references('id')->on('ca_pizza_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ca_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_ca_pizza_ingredients_connections_ca_pizza1');
			$table->dropForeign('fk_ca_pizza_ingredients_connections_ca_pizza_ingredients1');
		});
	}

}
