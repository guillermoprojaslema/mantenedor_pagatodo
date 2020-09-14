<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('tipolog_id')->nullable();
            $table->integer('empleado_id')->nullable();
            $table->string('clave_asociada')->nullable();
            $table->string('valor_asociado')->nullable();
            $table->string('detalle')->nullable();
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
        Schema::drop('logs');
    }

}
