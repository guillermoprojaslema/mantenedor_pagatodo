<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebServiceMethodsGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_service_methods_groups', function(Blueprint $table)
		{
			$table->id();
			$table->integer('method_id');
			$table->integer('group_id');
            $table->timestampsTz();
            $table->softDeletesTz();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('web_service_methods_groups');
	}

}
