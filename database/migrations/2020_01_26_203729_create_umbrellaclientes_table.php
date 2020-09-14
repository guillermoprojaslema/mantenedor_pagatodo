<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmbrellaclientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('umbrellaclientes', function(Blueprint $table)
		{
			$table->id();
			$table->string('cedula', 15)->nullable();
			$table->string('nombre', 60)->nullable();
			$table->string('fono', 12)->nullable();
			$table->integer('puntos')->nullable();
			$table->date('periodo')->nullable();
			$table->boolean('estado')->nullable()->default(1);
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
		Schema::drop('umbrellaclientes');
	}

}
