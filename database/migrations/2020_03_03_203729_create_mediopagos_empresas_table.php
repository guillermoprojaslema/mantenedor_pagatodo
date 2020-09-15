<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediopagosEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mediopagos_empresas', function(Blueprint $table)
		{
			$table->id();
			$table->timestamps();
			$table->softDeletes();
		});

        Schema::table('mediopagos_empresas', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->constrained()
                ->after('id');
            $table->foreignId('mediopago_id')
                ->constrained()
                ->after('empresa_id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('mediopagos_empresas', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
            $table->dropForeign(['mediopago_id']);
        });

		Schema::drop('mediopagos_empresas');
	}

}
