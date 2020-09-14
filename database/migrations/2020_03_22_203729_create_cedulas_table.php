<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedulasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('empresa_id')->nullable();
            $table->string('servicio_id', 100)->nullable();
            $table->bigInteger('tipopago_id')->nullable();
            $table->string('cedula', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cedulas');
    }

}
