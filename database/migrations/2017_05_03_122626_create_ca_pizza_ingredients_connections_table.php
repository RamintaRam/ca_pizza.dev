<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaPizzaIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ca_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('pizza_id', 36)->index('pizza_id');
			$table->string('ingredients_id', 36)->index('ingredients_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ca_pizza_ingredients_connections');
	}

}
