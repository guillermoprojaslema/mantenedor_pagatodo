<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionesPagosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promociones_pagos', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('pago_id');
            $table->integer('promocion_id');
            $table->integer('validador')->nullable();
            $table->string('telefono', 100)->nullable();
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
        Schema::drop('promociones_pagos');
    }

}
