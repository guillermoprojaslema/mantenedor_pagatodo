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
            $table->id();
            $table->string('description');
            $table->string('handler');
            $table->string('handler_cake');
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('deposit_settings', function (Blueprint $table) {
            $table->index(['handler']);
            $table->index(['handler_cake']);
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deposit_settings', function (Blueprint $table) {
            $table->dropIndex(['handler']);
            $table->dropIndex(['handler_cake']);
        });

        Schema::drop('deposit_settings');
    }

}
