<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)
                ->nullable();
            $table->string('comentario', 200)
                ->nullable();
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_termino')->nullable();
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
        Schema::drop('crones');
    }

}
