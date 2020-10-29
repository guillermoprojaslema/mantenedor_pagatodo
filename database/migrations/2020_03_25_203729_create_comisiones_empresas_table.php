<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones_empresas', function (Blueprint $table) {
            $table->id();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('comisiones_empresas', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->constrained()
                ->nullable()
                ->after('id');
            $table->foreignId('servicio_id')
                ->constrained()
                ->nullable()
                ->after('empresa_id');
            $table->foreignId('tipocargo_id')
                ->constrained()
                ->nullable()
                ->after('servicio_id');
            $table->foreignId('cashout_empresa_id')
                ->constrained()
                ->nullable()
                ->after('monto');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comisiones_empresas', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
            $table->dropForeign(['servicio_id']);
            $table->dropForeign(['tipocargo_id']);
            $table->dropForeign(['cashout_empresa_id']);

        });

        Schema::drop('comisiones_empresas');
    }

}
