<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGastoEspesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gasto_espes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('n_depto');
			$table->integer('tipo_gasto');
			$table->string('mes_cobro');
			$table->string('nom_gasto');
			$table->date('fecha_em');
			$table->date('fecha_ven');
			$table->integer('estado_gasto');
			$table->float('prorrateo');
			$table->string('otro');
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
		Schema::drop('gasto_espes');
	}

}
