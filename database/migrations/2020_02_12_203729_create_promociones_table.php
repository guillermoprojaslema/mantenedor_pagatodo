<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promociones', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->integer('empresa_id');
			$table->string('nombre', 200);
			$table->dateTime('fecha_desde')->nullable();
			$table->dateTime('fecha_hasta')->nullable();
			$table->integer('contador_pagos')->nullable();
			$table->integer('premios')->nullable();
			$table->integer('contador_premios')->nullable();
			$table->text('descripcion')->nullable();
			$table->float('monto', 10, 0)->nullable();
            $table->timestamps()->nullable();
            $table->softDeletes()->nullable();

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promociones');
	}

}
