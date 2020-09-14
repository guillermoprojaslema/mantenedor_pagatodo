<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificadorcobrosEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identificadorcobros_empresas', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->bigInteger('identificadorcobro_id');
			$table->bigInteger('empresa_id');
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
		Schema::drop('identificadorcobros_empresas');
	}

}
