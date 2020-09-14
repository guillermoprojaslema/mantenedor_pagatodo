<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmbrellapuntosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('umbrellapuntos', function(Blueprint $table)
		{
			$table->id();
			$table->integer('tipo_1')->nullable();
			$table->integer('tipo_2')->nullable();
			$table->integer('tipo_3')->nullable();
			$table->integer('tipo_4')->nullable();
			$table->integer('tipo_5')->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_termino')->nullable();
			$table->boolean('estado')->nullable()->default(1);
			$table->integer('tipo_6')->nullable();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('umbrellapuntos', function (Blueprint $table) {
            $table->foreignId('umbrellacliente_id')->constrained()->nullable()->after('id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('umbrellapuntos');
	}

}
