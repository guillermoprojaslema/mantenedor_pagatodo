<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutLogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('clave_asociada');
            $table->text('detalle')
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cashout_logs', function (Blueprint $table) {
            $table->foreignId('tipolog_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('empleado_id')
                ->nullable()
                ->constrained()
                ->after('tipolog_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cashout_logs', function (Blueprint $table) {
            $table->dropForeign(['tipolog_id']);
            $table->dropForeign(['empleado_id']);
        });

        Schema::drop('cashout_logs');
    }

}
