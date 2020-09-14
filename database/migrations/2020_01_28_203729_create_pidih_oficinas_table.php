<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidihOficinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pidih_oficinas', function(Blueprint $table)
		{
			$table->id();
			$table->string('nombre', 300)->nullable()->index('pidih_oficinas_nombre_idx');
            $table->integer('cupos_diarios')->nullable()->default(0);
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
		Schema::drop('pidih_oficinas');
	}

}
