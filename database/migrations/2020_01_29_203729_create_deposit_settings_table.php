<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositSettingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_settings', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('description');
            $table->string('handler')->index('deposit_settings_handler_idx');
            $table->string('handler_cake')->index('deposit_settings_handler_cake_idx');
            $table->timestampsTz()->nullable();
            $table->softDeletesTz()->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('deposit_settings');
    }

}
