<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('cedula', 100);
            $table->string('codigo', 100)->nullable();
            $table->bigInteger('sucursal_id');
            $table->string('usuario', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->bigInteger('grupo_id');
            $table->bigInteger('estado_id');
            $table->bigInteger('empresa_id')->nullable()->default(0);
            $table->bigInteger('cashout_empresa_id')->nullable()->default(0);
            $table->string('terminal', 20)->nullable();
            $table->text('tokenId')->nullable();
            $table->boolean('es_virtual')->nullable()->default(0);
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
        Schema::drop('empleados');
    }

}
