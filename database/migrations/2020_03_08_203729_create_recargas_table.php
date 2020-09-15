<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecargasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->string('numero_recibo', 100)
                ->nullable();
            $table->string('numero_mediopago', 100)
                ->nullable();
            $table->text('observacion')
                ->nullable();
            $table->string('numero_recarga', 50)
                ->nullable();
            $table->bigInteger('extras')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->constrained()
                ->after('id');
            $table->foreignId('sucursal_id')
                ->constrained('sucursales')
                ->after('empleado_id');
            $table->foreignId('empresa_id')
                ->constrained()
                ->after('sucursal_id');
            $table->foreignId('tipopago_id')
                ->constrained()
                ->after('empresa_id');
            $table->foreignId('mediopago_id')
                ->constrained()
                ->after('tipopago_id');
            $table->foreignId('estadopago_id')
                ->constrained()
                ->after('mediopago_id');
            $table->foreignId('moneda_id')
                ->constrained()
                ->after('estadopago_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recargas', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['sucursal_id']);
            $table->dropForeign(['empresa_id']);
            $table->dropForeign(['tipopago_id']);
            $table->dropForeign(['mediopago_id']);
            $table->dropForeign(['estadopago_id']);
            $table->dropForeign(['moneda_id']);
        });

        Schema::drop('recargas');
    }

}
