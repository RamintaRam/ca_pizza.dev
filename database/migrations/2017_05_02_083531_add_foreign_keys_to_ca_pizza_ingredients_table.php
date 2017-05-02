<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaPizzaIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ca_pizza_ingredients', function(Blueprint $table)
		{
			$table->foreign('id', 'fk_ca_pizza_ingredients_ca_pizza_ingredients_connections1')->references('ingredients_id')->on('ca_pizza_ingredients_connections')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ca_pizza_ingredients', function(Blueprint $table)
		{
			$table->dropForeign('fk_ca_pizza_ingredients_ca_pizza_ingredients_connections1');
		});
	}

}