<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogSystemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_systems', function (Blueprint $table) {
            $table->id();
            $table->string('message', 480)
                ->nullable();
            $table->integer('level')->nullable();
            $table->string('level_name', 50)
                ->nullable();
            $table->string('channel', 480)
                ->nullable();
            $table->text('context')
                ->nullable();
            $table->text('extra')
                ->nullable();
            $table->timestampsTz();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_systems');
    }

}
