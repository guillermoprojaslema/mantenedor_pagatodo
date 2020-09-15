<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobrosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobros', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_cedula', 100)
                ->nullable();
            $table->string('cliente_numero', 200)
                ->nullable();
            $table->date('fecha_emision')
                ->nullable();
            $table->date('fecha_vencimiento')
                ->nullable();
            $table->float('valor_minimo', 10, 0)
                ->nullable();
            $table->float('valor_total', 10, 0)
                ->nullable();
            $table->float('valor_multa', 10, 0)
                ->nullable();
            $table->string('tipo', 200)
                ->nullable();
            $table->string('numero_boleta_factura', 200)
                ->nullable();
            $table->string('cliente_nombre', 200)
                ->nullable();
            $table->text('extras')->nullable();
            $table->string('validador', 200)
                ->nullable();
            $table->string('datos_visa', 300)
                ->nullable();
            $table->boolean('obligatoria')
                ->nullable()
                ->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cobros', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->constrained()
                ->nullable()
                ->after('id');
        });

        Schema::table('cobros', function (Blueprint $table) {
            $table->foreignId('servicio_id')
                ->constrained()->nullable()
                ->after('id')
                ->index('cobros_servicio_id_idx');;
        });

        Schema::table('cobros', function (Blueprint $table) {
            $table->foreignId('moneda_id')
                ->constrained()
                ->nullable()
                ->after('extras');
        });

        Schema::table('cobros', function (Blueprint $table) {
            $table->foreignId('parent_id')
                ->constrained('cobros')
                ->nullable()
                ->after('datos_visa');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cobros');
    }

}
