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
            $table->dateTime('fecha')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->integer('numero_recibo')->nullable();
            $table->string('extras', 100)->nullable();
            $table->string('cedula', 100)->nullable();
            $table->string('cliente_nombre', 100)->nullable();
            $table->string('tipo', 250)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('cashout_cobro_id')
                ->constrained()
                ->nullable()
                ->after('id');
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
                ->nullable()
                ->after('cashout_cobro_id');
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('empleado_id');
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
                ->constrained()
                ->nullable()
                ->after('sucursal_id');
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
            $table->foreignId('estadopago_id')
                ->constrained()
                ->nullable()
                ->after('numero_recibo');
        });

        Schema::table('cashout_pagos', function (Blueprint $table) {
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
        Schema::drop('cashout_pagos');
    }

}
