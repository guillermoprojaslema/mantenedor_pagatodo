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
            $table->bigInteger('id')->primary('pagosbk_pkey');
            $table->bigInteger('cobro_id')->index('pagosbk_cobro_id_idx');
            $table->integer('empleado_id')->index('pagosbk_empleado_id_idx');
            $table->integer('sucursal_id')->nullable()->index('pagosbk_sucursal_id_idx');
            $table->integer('empresa_id')->index('pagosbk_empresa_id_idx');
            $table->integer('tipopago_id');
            $table->integer('mediopago_id');
            $table->dateTime('fecha')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->string('numero_recibo', 100)->nullable();
            $table->string('numero_mediopago', 100)->nullable();
            $table->string('observacion', 300)->nullable();
            $table->integer('estadopago_id')->nullable();
            $table->string('tipo', 100)->nullable();
            $table->string('extras', 300)->nullable();
            $table->integer('dolar_id')->nullable();
            $table->bigInteger('cliente_id')->nullable();
            $table->integer('intento_pago')->nullable();
            $table->boolean('reimpresion')->nullable();
            $table->integer('tiempo')->nullable();
            $table->integer('tiempo_real')->nullable();
            $table->string('validador_web_service', 20)->nullable();
            $table->boolean('pago_express')->nullable();
            $table->boolean('sumar')->nullable();
            $table->float('tiempo_respuesta_ws', 10, 0)->nullable();
            $table->string('error', 400)->nullable();
            $table->bigInteger('parent_id')->nullable()->index('pagosbk_parent_id_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagosbk');
    }

}
