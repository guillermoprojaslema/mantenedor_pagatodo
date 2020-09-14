<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosCashoutEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios_cashout_empresas', function(Blueprint $table)
		{
			$table->id();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('servicios_cashout_empresas', function (Blueprint $table) {
            $table->foreignId('servicio_id')
                ->constrained()
                ->nullable()
                ->after('id');
        });

        Schema::table('servicios_cashout_empresas', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
                ->constrained()
                ->nullable()
                ->after('servicio_id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicios_cashout_empresas');
	}

}
