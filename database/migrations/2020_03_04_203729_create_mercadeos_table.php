<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercadeosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercadeos', function (Blueprint $table) {
            $table->id();
            $table->integer('meta_pago')
                ->nullable();
            $table->integer('meta_recarga')
                ->nullable();
            $table->dateTime('fecha_desde')
                ->nullable();
            $table->dateTime('fecha_hasta')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('mercadeos', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
                ->constrained()
                ->after('id');
        });

        Schema::table('mercadeos', function (Blueprint $table) {
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->after('recaudadora_id');
        });

        Schema::table('mercadeos', function (Blueprint $table) {
            $table->foreignId('campana_id')
                ->constrained()
                ->after('sucursal_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mercadeos');
    }

}
