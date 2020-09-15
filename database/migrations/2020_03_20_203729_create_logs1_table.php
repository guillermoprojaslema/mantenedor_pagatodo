<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogs1Table extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs1', function (Blueprint $table) {
            $table->id();
            $table->string('clave_asociada')
                ->nullable();
            $table->string('valor_asociado')
                ->nullable();
            $table->string('detalle', 600)
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('logs1', function (Blueprint $table) {
            $table->foreignId('tipolog_id')
                ->constrained()
                ->after('id');
        });

        Schema::table('logs1', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
                ->after('tipolog_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logs1');
    }

}
