<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidihPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pidih_personas', function(Blueprint $table)
		{
			$table->id();
			$table->string('identificacion_tipo', 300)->nullable();
			$table->string('identificacion_codigo', 300)->nullable();
			$table->string('nombre_completo', 600)->nullable();
			$table->string('nacionalidad', 300)->nullable();
			$table->string('cedula', 15)->nullable()->index('pidih_personas_cedula_idx');
			$table->string('tipo_documento', 50)->nullable();
			$table->date('fecha_entrada')->nullable();
			$table->string('distrito', 400)->nullable();
			$table->date('fecha_nacimiento')->nullable();
            $table->string('mntn', 50)->nullable();
            $table->timestampsTz()->nullable();
            $table->softDeletesTz()->nullable();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pidih_personas');
	}

}
