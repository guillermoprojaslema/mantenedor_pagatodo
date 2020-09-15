<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->integer('puntos_pre')
                ->nullable()
                ->default(0);
            $table->dateTime('fecha_inicio')
                ->nullable();
            $table->dateTime('fecha_termino')
                ->nullable();
            $table->integer('puntos_post')
                ->nullable();
            $table->string('semana', 50)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('rankings', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
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
        Schema::table('rankings', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
        });

        Schema::drop('rankings');
    }

}
