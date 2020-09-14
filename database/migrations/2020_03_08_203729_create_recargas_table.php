<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecargasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('empleado_id')->nullable();
            $table->integer('sucursal_id')->nullable();
            $table->integer('empresa_id')->nullable();
            $table->integer('tipopago_id')->nullable();
            $table->integer('mediopago_id')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->string('numero_recibo', 100)->nullable();
            $table->string('numero_mediopago', 100)->nullable();
            $table->text('observacion')->nullable();
            $table->integer('estadopago_id')->nullable();
            $table->string('numero_recarga', 50)->nullable();
            $table->bigInteger('extras')->nullable();
            $table->integer('moneda_id')->nullable()->default(1);
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
        Schema::drop('recargas');
    }

}
