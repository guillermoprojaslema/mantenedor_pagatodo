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
            $table->dateTime('fecha')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->string('numero_recibo', 100)->nullable();
            $table->string('numero_mediopago', 100)->nullable();
            $table->string('observacion', 300)->nullable();
            $table->string('tipo', 100)->nullable();
            $table->string('extras', 300)->nullable();
            $table->integer('intento_pago')->nullable();
            $table->boolean('reimpresion')->nullable();
            $table->integer('tiempo')->nullable();
            $table->integer('tiempo_real')->nullable();
            $table->string('validador_web_service', 20)->nullable();
            $table->boolean('pago_express')->nullable();
            $table->boolean('sumar')->nullable();
            $table->float('tiempo_respuesta_ws', 10, 0)->nullable();
            $table->string('error', 400)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('cobro_id')
                ->constrained()
                ->nullable()
                ->after('id')
                ->index('pagosbk_cobro_id_idx');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
                ->nullable()
                ->after('cobro_id')
                ->index('pagosbk_empleado_id_idx');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('empleado_id')
                ->index('pagosbk_sucursal_id_idx');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->constrained()
                ->nullable()
                ->after('sucursal_id')
                ->index('pagosbk_empresa_id_idx');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('tipopago_id')
                ->constrained()
                ->nullable()
                ->after('empresa_id');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('mediopago_id')
                ->constrained()
                ->nullable()
                ->after('tipopago_id');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('estadopago_id')
                ->constrained()
                ->nullable()
                ->after('observacion');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('dolar_id')
                ->constrained('dolares')
                ->nullable()
                ->after('extras');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('cliente_id')
                ->constrained()
                ->nullable()
                ->after('dolar_id');
        });

        Schema::table('pagosbk', function (Blueprint $table) {
            $table->foreignId('parent_id')
                ->constrained('pagosbk')
                ->nullable()
                ->after('error')
                ->index('pagosbk_parent_id');
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
