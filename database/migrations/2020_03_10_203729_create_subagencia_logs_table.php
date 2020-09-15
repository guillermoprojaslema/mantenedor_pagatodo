<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagenciaLogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagencia_logs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha')
                ->nullable();
            $table->float('debito', 10, 0)
                ->nullable();
            $table->float('credito', 10, 0)
                ->nullable();
            $table->integer('transaccion')
                ->nullable();
            $table->integer('tipo_transaccion')
                ->nullable();
            $table->char('glosa', 100)
                ->nullable();
            $table->float('saldo_anterior', 10, 0)
                ->nullable();
            $table->float('saldo_actual', 10, 0)
                ->nullable();
            $table->string('descripcion', 200)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('subagencia_logs', function (Blueprint $table) {
            $table->foreignId('subagencia_id')
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
        Schema::drop('subagencia_logs');
    }

}
