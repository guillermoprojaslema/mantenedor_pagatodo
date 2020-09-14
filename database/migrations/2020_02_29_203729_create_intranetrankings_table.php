<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetrankingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('intranetrankings', function(Blueprint $table)
		{
			$table->id();
			$table->integer('empleado_id')->nullable();
			$table->integer('empresa_id')->nullable();
			$table->integer('tipo_1')->nullable();
			$table->integer('tipo_2')->nullable();
			$table->integer('tipo_3')->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_termino')->nullable();
			$table->boolean('semana')->nullable();
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
		Schema::drop('intranetrankings');
	}

}
