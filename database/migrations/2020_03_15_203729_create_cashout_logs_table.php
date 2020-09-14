<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutLogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_logs', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('tipolog_id');
            $table->bigInteger('empleado_id');
            $table->bigInteger('clave_asociada');
            $table->text('detalle')->nullable();
            $table->float('monto', 10, 0)->nullable();
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
        Schema::drop('cashout_logs');
    }

}
