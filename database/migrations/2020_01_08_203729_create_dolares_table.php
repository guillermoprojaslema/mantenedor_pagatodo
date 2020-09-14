<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolaresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolares', function (Blueprint $table) {
            $table->id();
            $table->float('valor', 10, 0);
            $table->boolean('termino')->nullable()->default(0);
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
        Schema::drop('dolares');
    }

}
