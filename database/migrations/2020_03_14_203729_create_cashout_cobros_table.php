<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutCobrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_cobros', function (Blueprint $table) {
            $table->id();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->bigInteger('validador');
            $table->string('cedula', 100);
            $table->string('cliente_nombre', 100);
            $table->integer('estado')
                ->nullable()
                ->default(1);
            $table->char('descripcion', 50)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cashout_cobros', function (Blueprint $table) {
            $table->foreignId('cashout_nomina_id')
                ->nullable()
                ->constrained()
                ->after('id');
        });

        Schema::table('cashout_cobros', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
                ->nullable()
                ->constrained()
                ->after('cashout_nomina_id');
        });

        Schema::table('cashout_cobros', function (Blueprint $table) {
            $table->foreignId('sucursal_id')->nullable()
                ->constrained('sucursales')
                ->after('cashout_empresa_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cashout_cobros');
    }

}
