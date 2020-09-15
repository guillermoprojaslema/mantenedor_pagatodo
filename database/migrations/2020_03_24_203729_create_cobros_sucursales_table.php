<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrosSucursalesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros_sucursales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cobros_sucursales', function (Blueprint $table) {
            $table->foreignId('cobro_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('cobro_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cobros_sucursales', function (Blueprint $table) {
            $table->dropForeign(['sucursal_id']);
            $table->dropForeign(['cobro_id']);
        });

        Schema::drop('cobros_sucursales');
    }

}
