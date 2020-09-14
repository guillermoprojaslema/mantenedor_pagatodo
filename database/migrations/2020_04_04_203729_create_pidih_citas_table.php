<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidihCitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pidih_citas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->index('pidih_citas_fecha_idx');
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('pidih_citas', function (Blueprint $table) {
            $table->foreignId('persona_id')
                ->constrained('pidih_personas')
                ->index('pidih_citas_persona_id_idx')
                ->after('id');
        });

        Schema::table('pidih_citas', function (Blueprint $table) {
            $table->foreignId('pago_id')
                ->constrained()
                ->index('pidih_citas_pago_id_idx')
                ->after('persona_id');
        });

        Schema::table('pidih_citas', function (Blueprint $table) {
            $table->foreignId('oficina_id')
                ->constrained()
                ->index('pidih_citas_oficina_id_idx')
                ->after('fecha');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pidih_citas');
    }

}
