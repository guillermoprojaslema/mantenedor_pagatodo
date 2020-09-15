<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNullifyPaymentRequestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nullify_payment_requests', function (Blueprint $table) {
            $table->id();
            $table->dateTime('request_date')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('nullify_payment_requests', function (Blueprint $table) {
            $table->foreignId('payment_id')
                ->constrained('pagos')
                ->nullable()
                ->after('id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('nullify_payment_requests', function (Blueprint $table) {
            $table->dropForeign(['payment_id']);

        });

        Schema::drop('nullify_payment_requests');
    }

}
