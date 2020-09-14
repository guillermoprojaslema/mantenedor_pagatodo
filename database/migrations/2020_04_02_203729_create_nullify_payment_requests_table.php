<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNullifyPaymentRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nullify_payment_requests', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('payment_id');
			$table->dateTime('request_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nullify_payment_requests');
	}

}
