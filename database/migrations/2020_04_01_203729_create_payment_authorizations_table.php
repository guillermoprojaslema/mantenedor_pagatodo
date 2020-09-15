<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentAuthorizationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_authorizations', function (Blueprint $table) {
            $table->id();
            $table->string('authorization_number', 10);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('payment_authorizations', function (Blueprint $table) {
            $table->foreignId('payment_id')
                ->constrained('pagos')
                ->nullable()
                ->after('id');
        });

        Schema::table('payment_authorizations', function (Blueprint $table) {
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('authorization_number');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_authorizations');
    }

}
