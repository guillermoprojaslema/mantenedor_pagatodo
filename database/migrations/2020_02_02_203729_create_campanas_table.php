<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estadocampana_id')->nullable();
            $table->string('nombre', 50)->nullable();
            $table->time('umbrella')->nullable()->default(0);
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
        Schema::drop('campanas');
    }

}
