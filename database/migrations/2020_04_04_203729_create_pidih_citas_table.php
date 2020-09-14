<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidihCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pidih_citas', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('persona_id')->index('pidih_citas_persona_id_idx');
			$table->bigInteger('pago_id')->index('pidih_citas_pago_id_idx');
			$table->date('fecha')->index('pidih_citas_fecha_idx');
			$table->bigInteger('oficina_id')->index('pidih_citas_oficina_id_idx');
			$table->timestampsTz();
            $table->softDeletesTz();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pidih_citas');
	}

}
