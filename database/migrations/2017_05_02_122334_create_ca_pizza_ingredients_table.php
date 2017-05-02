<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaPizzaIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ca_pizza_ingredients', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('category_id_UNIQUE');
			$table->string('name');
			$table->integer('count', true);
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
		Schema::drop('ca_pizza_ingredients');
	}

}
