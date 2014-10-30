<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGastoGralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gasto_grales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rut_ed');
			$table->integer('tipo_gasto');
			$table->string('mes_cobro');
			$table->string('nom_gasto');
			$table->date('fecha_em');
			$table->date('fecha_ven');
			$table->integer('n_factura');
			$table->integer('estado_gasto');
			$table->string('otros');
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
		Schema::drop('gasto_grales');
	}

}
