<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100)
                ->nullable();
            $table->text('bajada')
                ->nullable();
            $table->string('imagen', 250)
                ->nullable();
            $table->text('texto')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('noticias', function (Blueprint $table) {
            $table->foreignId('campana_id')
                ->nullable()
                ->constrained()
                ->after('texto');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticias', function (Blueprint $table) {
            $table->dropForeign(['campana_id']);
        });

        Schema::drop('noticias');
    }

}
