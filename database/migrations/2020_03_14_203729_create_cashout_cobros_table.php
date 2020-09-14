<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutCobrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_cobros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cashout_nomina_id');
            $table->bigInteger('cashout_empresa_id');
            $table->float('monto', 10, 0)->nullable();
            $table->bigInteger('validador');
            $table->string('cedula', 100);
            $table->string('cliente_nombre', 100);
            $table->integer('estado')->nullable()->default(1);
            $table->bigInteger('sucursal_id')->nullable();
            $table->char('descripcion', 50)->nullable();
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
        Schema::drop('cashout_cobros');
    }

}
