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
            $table->float('monto', 10, 0)->nullable();
            $table->string('numero_recibo', 100)->nullable();
            $table->string('numero_mediopago', 100)->nullable();
            $table->text('observacion')->nullable();
            $table->string('numero_recarga', 50)->nullable();
            $table->bigInteger('extras')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained()->after('id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('sucursal_id')->constrained('sucursales')->after('empleado_id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('empresa_id')->constrained()->after('sucursal_id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('tipopago_id')->constrained()->after('empresa_id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('mediopago_id')->constrained()->after('tipopago_id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('estadopago_id')->constrained()->after('mediopago_id');
        });

        Schema::table('recargas', function (Blueprint $table) {
            $table->foreignId('moneda_id')->constrained()->after('estadopago_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recargas');
    }

}
