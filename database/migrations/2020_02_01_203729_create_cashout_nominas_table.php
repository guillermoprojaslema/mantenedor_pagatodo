<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutNominasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_nominas', function (Blueprint $table) {
            $table->id();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->integer('validacion')
                ->nullable();
            $table->integer('cantidad')
                ->nullable();
            $table->dateTime('fecha')
                ->nullable();
            $table->text('observacion')
                ->nullable();
            $table->text('extras')
                ->nullable();
            $table->text('descripcion')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cashout_nominas', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
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
        Schema::drop('cashout_nominas');
    }

}
