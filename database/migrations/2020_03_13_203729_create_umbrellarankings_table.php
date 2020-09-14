<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmbrellarankingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umbrellarankings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('campana_id')->nullable();
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
        Schema::drop('umbrellarankings');
    }

}
