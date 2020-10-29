<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesbackTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientesback', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200)->nullable();
            $table->string('cedula', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('celular', 30)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('clientesback', function (Blueprint $table) {
            $table->index(['cedula']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('clientesback', function (Blueprint $table) {
            $table->dropIndex(['cedula']);
        });

        Schema::drop('clientesback');
    }

}
