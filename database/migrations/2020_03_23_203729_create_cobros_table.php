<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros', function (Blueprint $table) {
            $table->id();
            $table->integer('empresa_id');
            $table->string('cliente_cedula', 100)->nullable();
            $table->string('cliente_numero', 200)->nullable();
            $table->bigInteger('servicio_id', 100)->index('cobros_servicio_id_idx');
            $table->date('fecha_emision')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->float('valor_minimo', 10, 0)->nullable();
            $table->float('valor_total', 10, 0)->nullable();
            $table->float('valor_multa', 10, 0)->nullable();
            $table->string('tipo', 200)->nullable();
            $table->string('numero_boleta_factura', 200)->nullable();
            $table->string('cliente_nombre', 200)->nullable();
            $table->text('extras')->nullable();
            $table->bigIntegen('moneda_id')->nullable()->default(1);
            $table->string('validador', 200)->nullable();
            $table->string('datos_visa', 300)->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->boolean('obligatoria')->nullable()->default(1);
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
        Schema::drop('cobros');
    }

}
