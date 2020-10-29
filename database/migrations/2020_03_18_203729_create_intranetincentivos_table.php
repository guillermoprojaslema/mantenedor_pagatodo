<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetincentivosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranetincentivos', function (Blueprint $table) {
            $table->id();
            $table->integer('total_ventas')
                ->nullable();
            $table->integer('fecha_pago')
                ->nullable();
            $table->integer('monto')
                ->nullable();
            $table->date('fecha_semana');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('intranetincentivos', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
                ->after('id');
            $table->foreignId('intranetranking_id')
                ->constrained()
                ->after('monto');
        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intranetincentivos', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['intranetranking_id']);

        });

        Schema::drop('intranetincentivos');
    }

}
