<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificadorcobrosEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificadorcobros_empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('identificadorcobros_empresas', function (Blueprint $table) {
            $table->foreignId('identificadorcobro_id')
                ->constrained()
                ->after('id');
            $table->foreignId('empresa_id')
                ->constrained()
                ->after('identificadorcobro_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('identificadorcobros_empresas', function (Blueprint $table) {
            $table->dropForeign(['identificadorcobro_id']);
            $table->dropForeign(['empresa_id']);
        });

        Schema::drop('identificadorcobros_empresas');
    }

}
