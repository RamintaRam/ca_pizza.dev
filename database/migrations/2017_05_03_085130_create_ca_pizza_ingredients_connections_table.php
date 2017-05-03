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
			$table->string('id', 36)->unique('category_id_UNIQUE');
			$table->string('name');
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('pizza_id', 36)->unique('pizza_id_UNIQUE');
			$table->string('ingredients_id', 36)->unique('ingredients_id_UNIQUE');
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
