<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositValuesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_values', function (Blueprint $table) {
            $table->id();
            $table->boolean('just_virtual_employees')
                ->default(0);
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('branch_id')
                ->constrained('sucursales')
                ->nullable()
                ->after('id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->constrained('empresas')
                ->nullable()
                ->after('branch_id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->foreignId('deposit_setting_id')
                ->constrained()
                ->nullable()
                ->after('setting_id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->index('branch_id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->index('partner_id');
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->index('deposit_setting_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->dropForeign(['branch_id']);
            $table->dropForeign(['partner_id']);
            $table->dropForeign(['deposit_setting_id']);
        });

        Schema::table('deposit_values', function (Blueprint $table) {
            $table->dropIndex(['branch_id']);
            $table->dropIndex(['partner_id']);
            $table->dropIndex(['deposit_setting_id']);
        });

        Schema::drop('deposit_values');
    }

}
