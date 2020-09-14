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
            $table->bigInteger('recaudadora_id')->nullable();
            $table->bigInteger('empresa_id')->nullable();
            $table->bigInteger('tipocargo_id')->nullable();
            $table->float('monto', 10, 0)->nullable();
            $table->bigInteger('cashout_empresa_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
