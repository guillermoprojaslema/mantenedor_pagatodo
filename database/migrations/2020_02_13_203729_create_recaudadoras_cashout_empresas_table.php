<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudadorasCashoutEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recaudadoras_cashout_empresas', function(Blueprint $table)
		{
			$table->id();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('recaudadoras_cashout_empresas', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
                ->nullable()
                ->constrained()
                ->after('id');
        });

        Schema::table('recaudadoras_cashout_empresas', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
                ->nullable()
                ->constrained()
                ->after('recaudadora_id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recaudadoras_cashout_empresas');
	}

}
