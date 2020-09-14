<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallecobrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detallecobros', function(Blueprint $table)
		{
			$table->id();
			$table->string('nombre', 100)->nullable();
			$table->float('valor', 10, 0)->nullable();
			$table->bigInteger('cobro_id')->nullable();
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
		Schema::drop('detallecobros');
	}

}
