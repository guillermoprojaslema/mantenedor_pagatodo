<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('oficina_id');
            $table->string('cliente_cedula', 20);
            $table->date('fecha_asignada');
            $table->string('nombre_cliente', 30)->nullable();
            $table->string('apellido_cliente', 30)->nullable();
            $table->string('fecha_nacimiento', 10)->nullable();
            $table->boolean('estado')->nullable();
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
        Schema::drop('citas');
    }

}
