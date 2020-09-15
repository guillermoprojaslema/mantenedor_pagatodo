<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoPorServiciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_por_servicios', function (Blueprint $table) {
            $table->id();
            $table->float('monto', 10, 0)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cargo_por_servicios', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
                ->nullable()
                ->constrained()
                ->after('id');
        });

        Schema::table('cargo_por_servicios', function (Blueprint $table) {
            $table->foreignId('empresa_id')
                ->nullable()
                ->constrained()
                ->after('recaudadora_id');
        });

        Schema::table('cargo_por_servicios', function (Blueprint $table) {
            $table->foreignId('tipocargo_id')
                ->nullable()
                ->constrained()
                ->after('empresa_id');
        });

        Schema::table('cargo_por_servicios', function (Blueprint $table) {
            $table->foreignId('cashout_empresa_id')
                ->nullable()
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
        Schema::drop('cargo_por_servicios');
    }

}
