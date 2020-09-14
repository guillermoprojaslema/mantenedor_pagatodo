<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesSegurosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales_seguros', function(Blueprint $table)
		{
			$table->id();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('sucursales_seguros', function (Blueprint $table) {
            $table->foreignId('sucursal_id')->nullable()->constrained('sucursales')->after('id');
        });

        Schema::table('sucursales_seguros', function (Blueprint $table) {
            $table->foreignId('seguro_id')->nullable()->constrained()->after('sucursal_id');
        });

    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sucursales_seguros');
	}

}
