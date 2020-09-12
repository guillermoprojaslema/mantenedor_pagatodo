<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes2Table extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes2', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('nombre', 200)->nullable();
            $table->string('cedula', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('celular', 30)->nullable();
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
        Schema::drop('clientes2');
    }

}
