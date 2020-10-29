<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedulascitisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulascitis', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_cedula_citi', 50)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cedulascitis', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->nullable()
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
        Schema::table('cedulascitis', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
        });

        Schema::drop('cedulascitis');
    }

}
