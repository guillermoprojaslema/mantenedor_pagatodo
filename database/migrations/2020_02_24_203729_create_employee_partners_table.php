<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_partners', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('partner_id')->index('employee_partners_partner_id_idx');
			$table->bigInteger('employee_id')->index('employee_partners_employee_id_idx');
			$table->timestampsTz();
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
		Schema::drop('employee_partners');
	}

}
