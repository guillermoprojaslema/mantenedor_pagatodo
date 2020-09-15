<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasOpcionesrecargasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_opcionesrecargas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('empresas_opcionesrecargas', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('opcionesrecarga_id')
                ->nullable()
                ->constrained()
                ->after('empresa_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('empresas_opcionesrecargas', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
            $table->dropForeign(['opcionesrecarga_id']);
        });

        Schema::drop('empresas_opcionesrecargas');
    }

}
