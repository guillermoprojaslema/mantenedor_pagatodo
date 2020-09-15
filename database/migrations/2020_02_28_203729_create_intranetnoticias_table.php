<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetnoticiasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranetnoticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 80)
                ->nullable();
            $table->string('noticia')
                ->nullable();
            $table->dateTime('fecha')
                ->nullable();
            $table->string('resumen', 600)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('intranetnoticias', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->nullable()
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
        Schema::drop('intranetnoticias');
    }

}
