<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesRecaudadorasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones_recaudadoras', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('empresa_id')->nullable();
            $table->integer('servicio_id')->nullable();
            $table->integer('recaudadora_id')->nullable();
            $table->integer('tipocargo_id')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->integer('cashout_empresa_id')->nullable();
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
        Schema::drop('comisiones_recaudadoras');
    }

}
