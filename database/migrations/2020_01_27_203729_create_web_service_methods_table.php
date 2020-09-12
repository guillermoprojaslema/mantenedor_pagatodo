<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebServiceMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_service_methods', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->string('name', 200);
			$table->string('handler', 300);
            $table->timestampsTz()->nullable();
            $table->softDeletesTz()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('web_service_methods');
	}

}
