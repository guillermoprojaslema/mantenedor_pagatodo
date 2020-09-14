<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partner_values', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->bigInteger('item_id')->nullable();
			$table->integer('environment_id')->nullable();
			$table->text('value')->nullable();
            $table->timestampsTz()->nullable()->useCurrent();
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
		Schema::drop('partner_values');
	}

}
