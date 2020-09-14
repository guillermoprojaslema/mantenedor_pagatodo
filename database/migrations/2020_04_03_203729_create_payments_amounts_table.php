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
			$table->float('max_amount', 10, 0)->nullable();
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('payments_amounts', function (Blueprint $table) {
            $table->foreignId('partner_id')->constrained('empresas')->nullable()->after('id');
        });

        Schema::table('payments_amounts', function (Blueprint $table) {
            $table->foreignId('money_id')->constrained('monedas')->nullable()->after('partner_id');
        });

        Schema::table('payments_amounts', function (Blueprint $table) {
            $table->foreignId('payment_method_id')->constrained('tipopagos')->nullable()->after('money_id');
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
