<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('clave_asociada')
                ->nullable();
            $table->string('valor_asociado')
                ->nullable();
            $table->string('detalle')
                ->nullable();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();

        });

        Schema::table('logs', function (Blueprint $table) {
            $table->foreignId('tipolog_id')
                ->nullable()
                ->constrained()
                ->after('id');
            $table->foreignId('empleado_id')
                ->constrained()
                ->nullable()
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
        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['tipolog_id']);
            $table->dropForeign(['empleado_id']);
        });
        Schema::drop('logs');
    }

}
