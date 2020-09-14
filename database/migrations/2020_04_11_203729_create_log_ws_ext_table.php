<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogWsExtTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_ws_ext', function (Blueprint $table) {
            $table->bigIncrements();
            $table->integer('empresa_id')->nullable();
            $table->bigInteger('entidad_id')->nullable();
            $table->string('entidad')->nullable();
            $table->text('input')->nullable();
            $table->text('output')->nullable();
            $table->text('payload')->nullable();
            $table->timestampsTz()->nullable();

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_ws_ext');
    }

}
