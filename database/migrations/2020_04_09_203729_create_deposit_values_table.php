<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deposit_values', function(Blueprint $table)
		{
			$table->bigIncrements();
			$table->integer('branch_id')->index('deposit_values_branch_id_idx');
			$table->integer('partner_id')->index('deposit_values_partner_id_idx');
			$table->integer('setting_id')->index('deposit_values_setting_id_idx');
			$table->boolean('just_virtual_employees')->default(0);
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
		Schema::drop('deposit_values');
	}

}
