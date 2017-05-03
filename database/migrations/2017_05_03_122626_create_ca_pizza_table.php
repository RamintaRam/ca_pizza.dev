<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ca_pizza', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('category_id_UNIQUE');
			$table->string('name');
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('comment')->nullable();
			$table->string('cheese_id', 36)->nullable()->index('cheese_id');
			$table->string('pad_id', 36)->index('pad_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ca_pizza');
	}

}
