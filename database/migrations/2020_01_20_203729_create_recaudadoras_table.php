<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudadorasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaudadoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->string('fono_contacto', 100)->nullable();
            $table->string('nombre_contacto', 100)->nullable();
            $table->string('numero', 100)->nullable();
            $table->string('dominio', 50)->nullable();
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
        Schema::drop('recaudadoras');
    }

}
