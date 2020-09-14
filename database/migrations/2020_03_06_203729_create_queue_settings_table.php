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
			$table->bigIncrements();
			$table->bigInteger('partner_id');
			$table->bigInteger('branch_id');
			$table->boolean('enabled')->nullable()->default(1);
            $table->timestamps()->nullable()->useCurrent();
            $table->softDeletes()->nullable();
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
