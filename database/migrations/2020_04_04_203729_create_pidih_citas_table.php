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
            $table->date('fecha')
                ->index('pidih_citas_fecha_index');
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('pidih_citas', function (Blueprint $table) {
            $table->foreignId('persona_id')
                ->constrained('pidih_personas')
                ->after('id');
            $table->foreignId('pago_id')
                ->constrained()
                ->after('persona_id');
            $table->foreignId('oficina_id')
                ->constrained()
                ->after('fecha');
        });

        Schema::table('pidih_citas', function (Blueprint $table) {
            $table->index('persona_id');
            $table->index('pago_id');
            $table->index('oficina_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pidih_citas', function (Blueprint $table) {

            $table->dropIndex(['persona_id']);
            $table->dropIndex(['pago_id']);
            $table->dropIndex(['oficina_id']);
            $table->dropForeign(['persona_id']);
            $table->dropForeign(['pago_id']);
            $table->dropForeign(['oficina_id']);
        });

        Schema::drop('pidih_citas');
    }

}
