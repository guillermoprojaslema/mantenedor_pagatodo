<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesSegurosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales_seguros', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->integer('sucursal_id')->nullable();
			$table->integer('seguro_id')->nullable();
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
		Schema::drop('sucursales_seguros');
	}

}
