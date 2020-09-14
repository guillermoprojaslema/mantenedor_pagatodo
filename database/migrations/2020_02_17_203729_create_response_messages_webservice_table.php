<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseMessagesWebserviceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('response_messages_webservice', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->bigInteger('partner_id')->nullable();
			$table->integer('code')->nullable();
			$table->string('message', 150)->nullable();
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
		Schema::drop('response_messages_webservice');
	}

}
