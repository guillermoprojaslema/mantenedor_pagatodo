<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones_empresas', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('empresa_id')->nullable();
            $table->bigInteger('servicio_id')->nullable();
            $table->bigInteger('tipocargo_id')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->bigInteger('cashout_empresa_id')->nullable();
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
        Schema::drop('comisiones_empresas');
    }

}
