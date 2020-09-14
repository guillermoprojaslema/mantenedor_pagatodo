<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogWebservicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_webservices', function(Blueprint $table)
		{
			$table->id();
			$table->string('ip_address')->nullable();
			$table->text('request_headers')->nullable();
			$table->string('request_url', 500)->nullable();
			$table->string('request_content_type', 500)->nullable();
			$table->string('response_reason_phrase')->nullable();
			$table->smallInteger('response_status_code')->nullable();
			$table->text('request_body')->nullable();
			$table->text('response_body')->nullable();
            $table->timestampsTz()->nullable()->useCurrent();

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_webservices');
	}

}
