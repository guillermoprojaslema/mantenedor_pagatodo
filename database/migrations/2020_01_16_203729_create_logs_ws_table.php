<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsWsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_ws', function (Blueprint $table) {
            $table->id();
            $table->text('input')->nullable();
            $table->text('output')->nullable();
            $table->string('url')->nullable();
            $table->text('payload')->nullable();
            $table->timestampsTz()->nullable()->useCurrent();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logs_ws');
    }

}
