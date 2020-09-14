<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('cedula', 100);
            $table->string('codigo', 100)->nullable();
            $table->string('usuario', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('terminal', 20)->nullable();
            $table->text('tokenId')->nullable();
            $table->boolean('es_virtual')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('empleados', function (Blueprint $table) {
            $table->foreignId('sucursal_id')->nullable()->constrained('sucursales')->after('codigo');
        });

        Schema::table('empleados', function (Blueprint $table) {
            $table->foreignId('grupo_id')->nullable()->constrained()->after('password');
        });

        Schema::table('empleados', function (Blueprint $table) {
            $table->foreignId('estado_id')->nullable()->constrained()->after('grupo_id');
        });

        Schema::table('empleados', function (Blueprint $table) {
            $table->foreignId('empresa_id')->nullable()->constrained()->after('estado_id');
        });

        Schema::table('empleados', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')->nullable()->constrained()->default(0)->after('empresa_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }

}
