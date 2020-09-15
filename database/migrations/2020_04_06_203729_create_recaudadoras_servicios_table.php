<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudadorasServiciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaudadoras_servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('recaudadoras_servicios', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('servicio_id')
                ->constrained()
                ->nullable()
                ->after('recaudadora_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recaudadoras_servicios', function (Blueprint $table) {
            $table->dropForeign(['recaudadora_id']);
            $table->dropForeign(['servicio_id']);

        });

        Schema::drop('recaudadoras_servicios');
    }

}
