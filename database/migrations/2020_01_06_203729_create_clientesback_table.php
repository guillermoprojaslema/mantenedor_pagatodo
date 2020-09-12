<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesbackTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientesback', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('nombre', 200)->nullable();
            $table->string('cedula', 50)->nullable()->index('cedula_index');
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
        Schema::drop('clientesback');
    }

}
