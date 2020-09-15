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
            $table->dateTime('fecha')
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->float('saldo_actual', 10, 0)
                ->nullable();
            $table->string('observacion')
                ->nullable();
            $table->string('numero_deposito', 200)
                ->nullable();
            $table->string('cuenta', 80)
                ->nullable();
            $table->boolean('valija')
                ->nullable();
            $table->boolean('reintegracion')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('subagencia_pagos', function (Blueprint $table) {
            $table->foreignId('subagencia_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('estadopago_id')
                ->nullable()
                ->constrained()
                ->after('saldo_actual');
            $table->foreignId('banco_id')
                ->nullable()
                ->constrained()
                ->after('observacion');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subagencia_pagos', function (Blueprint $table) {
            $table->dropForeign(['subagencia_id']);
            $table->dropForeign(['estadopago_id']);
            $table->dropForeign(['banco_id']);

        });

        Schema::drop('subagencia_pagos');
    }

}
