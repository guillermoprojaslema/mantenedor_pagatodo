<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutPagosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_pagos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cashout_cobro_id');
            $table->bigInteger('empleado_id');
            $table->bigInteger('sucursal_id');
            $table->bigInteger('cashout_empresa_id');
            $table->dateTime('fecha')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->integer('numero_recibo')->nullable();
            $table->bigInteger('estadopago_id')->nullable();
            $table->string('extras', 100)->nullable();
            $table->string('cedula', 100)->nullable();
            $table->string('cliente_nombre', 100)->nullable();
            $table->string('tipo', 250)->nullable();
            $table->bigInteger('cashout_nomina_id')->nullable();
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
        Schema::drop('cashout_pagos');
    }

}
