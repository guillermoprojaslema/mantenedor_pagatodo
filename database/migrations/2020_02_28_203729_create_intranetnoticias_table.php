<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetnoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('intranetnoticias', function(Blueprint $table)
		{
			$table->id();
			$table->integer('empleado_id')->nullable();
			$table->string('titulo', 80)->nullable();
			$table->string('noticia')->nullable();
			$table->dateTime('fecha')->nullable();
			$table->string('resumen', 600)->nullable();
            $table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('intranetnoticias');
	}

}
