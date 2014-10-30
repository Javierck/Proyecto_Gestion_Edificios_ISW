<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeptosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deptos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('bodega');
			$table->string('estacionamiento');
			$table->integer('gastos_Espe');
			$table->integer('rut_Ed');
			$table->integer('rut_Prop');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deptos');
	}

}
