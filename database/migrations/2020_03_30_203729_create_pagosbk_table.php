<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosbkTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosbk', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha')
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->string('numero_recibo', 100)
                ->nullable();
            $table->string('numero_mediopago', 100)
                ->nullable();
            $table->string('observacion', 300)
                ->nullable();
            $table->string('tipo', 100)
                ->nullable();
            $table->string('extras', 300)
                ->nullable();
            $table->integer('intento_pago')
                ->nullable();
            $table->boolean('reimpresion')
                ->nullable();
            $table->integer('tiempo')
                ->nullable();
            $table->integer('tiempo_real')
                ->nullable();
            $table->string('validador_web_service', 20)
                ->nullable();
            $table->boolean('pago_express')
                ->nullable();
            $table->boolean('sumar')
                ->nullable();
            $table->float('tiempo_respuesta_ws', 10, 0)
                ->nullable();
            $table->string('error', 400)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('cobro_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('empleado_id')
                ->constrained()
                ->nullable()
                ->after('cobro_id');
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('empleado_id');
            $table->foreignId('empresa_id')
                ->constrained()
                ->nullable()
                ->after('sucursal_id');
            $table->foreignId('tipopago_id')
                ->constrained()
                ->nullable()
                ->after('empresa_id');
            $table->foreignId('estadopago_id')
                ->constrained()
                ->nullable()
                ->after('observacion');
            $table->foreignId('mediopago_id')
                ->constrained()
                ->nullable()
                ->after('tipopago_id');
            $table->foreignId('dolar_id')
                ->constrained('dolares')
                ->nullable()
                ->after('extras');
            $table->foreignId('cliente_id')
                ->constrained()
                ->nullable()
                ->after('dolar_id');
            $table->foreignId('parent_id')
                ->constrained('pagosbk')
                ->nullable()
                ->after('error');

            $table->index('cobro_id');
            $table->index('empleado_id');
            $table->index('sucursal_id');
            $table->index('empresa_id');
            $table->index('tipopago_id');
            $table->index('estadopago_id');
            $table->index('mediopago_id');
            $table->index('dolar_id');
            $table->index('cliente_id');
            $table->index('parent_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagosbk', function (Blueprint $table) {
            $table->dropForeign(['cobro_id']);
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['sucursal_id']);
            $table->dropForeign(['empresa_id']);
            $table->dropForeign(['tipopago_id']);
            $table->dropForeign(['mediopago_id']);
            $table->dropForeign(['estadopago_id']);
            $table->dropForeign(['dolar_id']);
            $table->dropForeign(['cliente_id']);
            $table->dropForeign(['parent_id']);
            $table->dropIndex(['cobro_id']);
            $table->dropIndex(['empleado_id']);
            $table->dropIndex(['sucursal_id']);
            $table->dropIndex(['empresa_id']);
            $table->dropIndex(['tipopago_id']);
            $table->dropIndex(['mediopago_id']);
            $table->dropIndex(['estadopago_id']);
            $table->dropIndex(['dolar_id']);
            $table->dropIndex(['cliente_id']);
            $table->dropIndex(['parent_id']);
        });

        Schema::drop('pagosbk');
    }

}
