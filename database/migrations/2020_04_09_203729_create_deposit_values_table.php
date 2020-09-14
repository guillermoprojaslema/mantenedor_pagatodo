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
			$table->id();
			$table->boolean('just_virtual_employees')->default(0);
            $table->timestampsTz();
            $table->softDeletesTz();
		});

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('branch_id')
                ->constrained('sucursales')
                ->index('deposit_values_branch_id_idx')
                ->nullable()
                ->after('id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->constrained('empresas')
                ->index('deposit_values_partner_id_idx')
                ->nullable()
                ->after('branch_id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('deposit_settings')
                ->constrained()
                ->index('deposit_values_setting_id_idx')
                ->nullable()
                ->after('setting_id');
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
