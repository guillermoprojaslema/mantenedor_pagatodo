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
            $table->id();
            $table->string('cliente_cedula', 20);
            $table->date('fecha_asignada');
            $table->string('nombre_cliente', 30)->nullable();
            $table->string('apellido_cliente', 30)->nullable();
            $table->string('fecha_nacimiento', 10)->nullable();
            $table->boolean('estado')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('citas', function (Blueprint $table) {
            $table->foreignId('oficina_id')->constrained()->after('id');
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
