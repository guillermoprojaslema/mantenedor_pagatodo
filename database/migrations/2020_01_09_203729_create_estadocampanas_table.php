<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadocampanasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadocampanas', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('nombre', 50)->nullable();
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
        Schema::drop('estadocampanas');
    }

}
