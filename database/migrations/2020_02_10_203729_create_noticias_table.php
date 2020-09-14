<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table)
		{
			$table->string('titulo', 100)->nullable();
			$table->text('bajada')->nullable();
			$table->string('imagen', 250)->nullable();
			$table->text('texto')->nullable();
            $table->id();
            $table->bigInteger('campana_id')->nullable();
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
		Schema::drop('noticias');
	}

}
