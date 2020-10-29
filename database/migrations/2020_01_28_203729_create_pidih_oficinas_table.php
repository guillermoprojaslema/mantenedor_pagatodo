<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidihOficinasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pidih_oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 300)
                ->nullable();
            $table->integer('cupos_diarios')
                ->nullable()
                ->default(0);
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('pidih_oficinas', function (Blueprint $table) {
            $table->index(['nombre']);
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('pidih_oficinas', function (Blueprint $table) {
            $table->dropIndex(['nombre']);
        });

        Schema::drop('pidih_oficinas');
    }

}
