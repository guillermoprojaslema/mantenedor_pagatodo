<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oficinas', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->integer('empresa_id');
			$table->string('nombre', 50);
			$table->integer('cantidad')->nullable();
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
		Schema::drop('oficinas');
	}

}
