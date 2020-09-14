<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntranetlogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranetlogs', function (Blueprint $table) {
            $table->id();
            $table->string('origen', 300)->nullable();
            $table->string('ip', 100)->nullable();
            $table->bigInteger('sucursal_id')->nullable();
            $table->date('fecha')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('intranetlogs', function (Blueprint $table) {
            $table->foreignId('empleado_id')->nullable()->after('id');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('intranetlogs');
    }

}
