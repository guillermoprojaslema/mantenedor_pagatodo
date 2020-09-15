<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios_empresas', function(Blueprint $table)
		{
			$table->id();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('servicios_empresas', function (Blueprint $table) {
            $table->foreignId('servicio_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('empresa_id')
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
        Schema::table('servicios_empresas', function (Blueprint $table) {
            $table->dropForeign(['servicio_id']);
            $table->dropForeign(['empresa_id']);

        });

		Schema::drop('servicios_empresas');
	}

}
