<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasOpcionesrecargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas_opcionesrecargas', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->bigInteger('empresa_id')->nullable();
			$table->bigInteger('opcionesrecarga_id')->nullable();
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
		Schema::drop('empresas_opcionesrecargas');
	}

}
