<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudadorasServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recaudadoras_servicios', function(Blueprint $table)
		{
			$table->id();
			$table->integer('recaudadora_id')->nullable();
			$table->integer('servicio_id')->nullable();
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
		Schema::drop('recaudadoras_servicios');
	}

}
