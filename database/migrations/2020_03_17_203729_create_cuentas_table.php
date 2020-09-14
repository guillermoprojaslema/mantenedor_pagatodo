<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta')->nullable();
            $table->bigInteger('tipobusqueda')->nullable();
            $table->string('fecha_notificacion', 4)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cuentas', function (Blueprint $table) {
            $table->foreignId('cliente_id')->constrained()->after('id')->index('cliente_id_index');
        });

        Schema::table('cuentas', function (Blueprint $table) {
            $table->foreignId('empresa_id')->constrained()->after('cliente_id');
        });
        Schema::table('cuentas', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained()->after('fecha_notificacion');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuentas');
    }

}
