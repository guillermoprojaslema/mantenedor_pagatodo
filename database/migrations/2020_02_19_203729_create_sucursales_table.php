<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->string('numero', 50)->nullable();
            $table->string('direccion')->nullable();
            $table->string('codigo', 100)->nullable();
            $table->boolean('impresora_carta')->nullable();
            $table->boolean('impresora_termica')->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('ciudad', 50)->nullable();
            $table->string('provincia', 50)->nullable();
            $table->string('contacto')->nullable();
            $table->string('cedula_rnc', 50)->nullable();
            $table->string('nombre_legal')->nullable();
            $table->string('observaciones')->nullable();
            $table->boolean('pago_rapido')->nullable();
            $table->boolean('cashout')->nullable();
            $table->boolean('acepta_dolar')->nullable()->default(0);
            $table->string('id_gp', 100)->nullable();
            $table->boolean('activo')->nullable()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('sucursales', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')->nullable()->constrained()->after('numero');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sucursales');
    }

}
