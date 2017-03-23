<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('code')->primary();
			$table->string('title', 150);
			$table->string('description', 500);
			$table->decimal('price', 5);
			$table->string('image', 150)->nullable();
			$table->string('delivery_time', 250)->nullable();
			$table->char('status', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
