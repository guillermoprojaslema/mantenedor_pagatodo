<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedulasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cedulas', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->constrained()
                ->nullable()
                ->after('id');
        });

        Schema::table('cedulas', function (Blueprint $table) {
            $table->foreignId('servicio_id')
                ->constrained()
                ->nullable()
                ->after('empresa_id');
        });

        Schema::table('cedulas', function (Blueprint $table) {
            $table->foreignId('tipopago_id')
                ->constrained()
                ->nullable()
                ->after('servicio_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cedulas');
    }

}
