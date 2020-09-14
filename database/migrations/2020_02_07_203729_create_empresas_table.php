<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('categoriaempresa_id');
            $table->string('nombre', 200);
            $table->string('funcion', 100)->nullable();
            $table->smallInteger('pago_parcial')->nullable();
            $table->smallInteger('pago_abono')->nullable();
            $table->string('contacto_nombre', 200)->nullable();
            $table->string('contacto_fono', 100)->nullable();
            $table->boolean('opcion_numero_recibo')->nullable();
            $table->boolean('opcion_observacion')->nullable();
            $table->boolean('opcion_numero_cliente')->nullable();
            $table->string('impresion_layout', 10)->nullable();
            $table->boolean('recarga_fija')->nullable()->default(0);
            $table->boolean('opcion_cedula')->nullable();
            $table->boolean('activo')->nullable();
            $table->string('email', 50)->nullable();
            $table->integer('visa_id')->nullable();
            $table->string('imagen', 250)->nullable();
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
        Schema::drop('empresas');
    }

}
