<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagencias', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('sucursal_id');
            $table->float('saldo_actual', 10, 0)->nullable();
            $table->float('saldo_total', 10, 0)->nullable();
            $table->boolean('activable')->nullable()->default(1);
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
        Schema::drop('subagencias');
    }

}
