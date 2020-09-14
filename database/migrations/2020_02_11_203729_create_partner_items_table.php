<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partner_items', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->bigInteger('partner_id');
			$table->string('name', 300);
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
		Schema::drop('partner_items');
	}

}
