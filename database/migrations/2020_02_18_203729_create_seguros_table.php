<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegurosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguros', function(Blueprint $table)
		{
			$table->id();
			$table->string('nombre', 50)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('seguros', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->nullable()
                ->constrained()
                ->after('id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('seguros', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
        });

		Schema::drop('seguros');
	}

}
