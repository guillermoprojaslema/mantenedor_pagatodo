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
            $table->dateTime('fecha')
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->integer('numero_recibo')
                ->nullable();
            $table->string('extras', 100)
                ->nullable();
            $table->string('cedula', 100)
                ->nullable();
            $table->string('cliente_nombre', 100)
                ->nullable();
            $table->string('tipo', 250)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('cashout_cobro_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('empleado_id')
                ->constrained()
                ->nullable()
                ->after('cashout_cobro_id');
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('empleado_id');
            $table->foreignId('cashout_empresa_id')
                ->constrained()
                ->nullable()
                ->after('sucursal_id');
            $table->foreignId('estadopago_id')
                ->constrained()
                ->nullable()
                ->after('numero_recibo');
            $table->foreignId('cashout_nomina_id')
                ->constrained()
                ->nullable()
                ->after('tipo');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->dropForeign(['cashout_cobro_id']);
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['sucursal_id']);
            $table->dropForeign(['cashout_empresa_id']);
            $table->dropForeign(['estadopago_id']);
            $table->dropForeign(['cashout_nomina_id']);
        });

        Schema::drop('cashout_pagos');
    }

}
