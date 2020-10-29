<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetrankingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranetrankings', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_1')
                ->nullable();
            $table->integer('tipo_2')
                ->nullable();
            $table->integer('tipo_3')
                ->nullable();
            $table->date('fecha_inicio')
                ->nullable();
            $table->date('fecha_termino')
                ->nullable();
            $table->boolean('semana')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('intranetrankings', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('empresa_id')
                ->nullable()
                ->constrained()
                ->after('empleado_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intranetrankings', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['empresa_id']);
        });

        Schema::drop('intranetrankings');
    }

}
