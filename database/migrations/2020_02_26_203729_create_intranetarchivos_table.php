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
			$table->id();
			$table->string('nombre', 100)->nullable();
			$table->string('tipo', 100)->nullable();
			$table->integer('tamano')->nullable();
			$table->string('descripcion', 200)->nullable();
            $table->string('ext', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('intranetarchivos', function (Blueprint $table) {
            $table->foreignId('empleado_id')->nullable()->after('id');
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
