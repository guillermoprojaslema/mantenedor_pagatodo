<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercadeosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mercadeos', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('recaudadora_id')->nullable();
			$table->bigInteger('sucursal_id')->nullable();
			$table->bigInteger('campana_id')->nullable();
			$table->integer('meta_pago')->nullable();
			$table->integer('meta_recarga')->nullable();
			$table->dateTime('fecha_desde')->nullable();
			$table->dateTime('fecha_hasta')->nullable();
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
		Schema::drop('mercadeos');
	}

}
