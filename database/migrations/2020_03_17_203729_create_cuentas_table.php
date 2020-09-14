<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->index('cliente_id_index');
            $table->bigInteger('empresa_id');
            $table->string('cuenta')->nullable();
            $table->bigInteger('tipobusqueda')->nullable();
            $table->string('fecha_notificacion', 4)->nullable();
            $table->bigInteger('empleado_id')->nullable();
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
        Schema::drop('cuentas');
    }

}
