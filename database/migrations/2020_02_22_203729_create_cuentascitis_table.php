<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentascitisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentascitis', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('cedulasciti_id')->nullable();
            $table->bigInteger('moneda_id')->nullable();
            $table->string('numero_cuenta', 50)->nullable();
            $table->timestamps()->nullable();
            $table->softDeletes()->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuentascitis');
    }

}
