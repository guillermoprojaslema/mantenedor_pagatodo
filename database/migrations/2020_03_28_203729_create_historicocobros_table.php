<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricocobrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicocobros', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('empresa_id')->nullable();
            $table->string('cliente_cedula', 100)->nullable();
            $table->string('cliente_numero', 200)->nullable();
            $table->string('servicio_id', 100)->index('historicocobros_servicio_id_idx');
            $table->date('fecha_emision')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->float('valor_minimo', 10, 0)->nullable();
            $table->float('valor_total', 10, 0)->nullable();
            $table->float('valor_multa', 10, 0)->nullable();
            $table->string('tipo', 200)->nullable();
            $table->string('numero_boleta_factura', 200)->nullable();
            $table->string('cliente_nombre', 200)->nullable();
            $table->integer('moneda_id')->nullable()->default(1);
            $table->text('extras')->nullable();
            $table->string('datos_visa', 300)->nullable();
            $table->bigInteger('parent_id')->nullable();
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
        Schema::drop('historicocobros');
    }

}
