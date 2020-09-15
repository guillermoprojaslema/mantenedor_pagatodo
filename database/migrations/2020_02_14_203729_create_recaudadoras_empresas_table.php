<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudadorasEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaudadoras_empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('recaudadoras_empresas', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('empresa_id')
                ->nullable()
                ->constrained()
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
        Schema::table('recaudadoras_empresas', function (Blueprint $table) {
            $table->dropForeign(['recaudadora_id']);
            $table->dropForeign(['empresa_id']);
        });

        Schema::drop('recaudadoras_empresas');
    }

}
