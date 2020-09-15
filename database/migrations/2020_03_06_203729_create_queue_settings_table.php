<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueueSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queue_settings', function(Blueprint $table)
		{
			$table->id();
			$table->boolean('enabled')
                ->nullable()
                ->default(1);
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('queue_settings', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->constrained('empresas')
                ->after('id');
        });

        Schema::table('queue_settings', function (Blueprint $table) {
            $table->foreignId('branch_id')
                ->constrained('sucursales')
                ->after('partner_id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('queue_settings');
	}

}
