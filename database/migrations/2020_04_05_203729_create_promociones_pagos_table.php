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
            $table->id();
            $table->integer('validador')->nullable();
            $table->string('telefono', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('promociones_pagos', function (Blueprint $table) {
            $table->foreignId('pago_id')
                ->constrained()
                ->after('id');
        });

        Schema::table('promociones_pagos', function (Blueprint $table) {
            $table->foreignId('promocion_id')
                ->constrained('promociones')
                ->after('pago_id');
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
