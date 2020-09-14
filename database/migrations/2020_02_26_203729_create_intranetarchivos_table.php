<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetarchivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('intranetarchivos', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->bigInteger('empleado_id')->nullable();
			$table->string('nombre', 100)->nullable();
			$table->string('tipo', 100)->nullable();
			$table->integer('tamano')->nullable();
			$table->string('descripcion', 200)->nullable();
            $table->string('ext', 10)->nullable();
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
		Schema::drop('intranetarchivos');
	}

}
