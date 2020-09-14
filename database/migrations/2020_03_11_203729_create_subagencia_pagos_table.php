<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagenciaPagosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagencia_pagos', function (Blueprint $table) {
            $table->id();
            $table->integer('subagencia_id');
            $table->dateTime('fecha')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->float('saldo_actual', 10, 0)->nullable();
            $table->integer('estadopago_id')->nullable();
            $table->string('observacion')->nullable();
            $table->integer('banco_id')->nullable();
            $table->string('numero_deposito', 200)->nullable();
            $table->string('cuenta', 80)->nullable();
            $table->boolean('valija')->nullable();
            $table->boolean('reintegracion')->nullable();
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
        Schema::drop('subagencia_pagos');
    }

}
