<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsAmountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments_amounts', function(Blueprint $table)
		{
			$table->id('id');
			$table->bigInteger('partner_id');
			$table->bigInteger('money_id');
			$table->bigInteger('payment_method_id');
			$table->float('max_amount', 10, 0)->nullable();
            $table->timestamps()->nullable();
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
		Schema::drop('payments_amounts');
	}

}
