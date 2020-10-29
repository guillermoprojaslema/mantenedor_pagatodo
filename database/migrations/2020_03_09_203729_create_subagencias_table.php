<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagencias', function (Blueprint $table) {
            $table->id();
            $table->float('saldo_actual', 10, 0)
                ->nullable();
            $table->float('saldo_total', 10, 0)
                ->nullable();
            $table->boolean('activable')
                ->nullable()
                ->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('subagencias', function (Blueprint $table) {
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->after('id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subagencias', function (Blueprint $table) {
            $table->dropForeign(['sucursal_id']);
        });

        Schema::drop('subagencias');
    }

}
