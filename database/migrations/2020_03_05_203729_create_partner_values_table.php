<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerValuesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_values', function (Blueprint $table) {
            $table->id();
            $table->text('value')
                ->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('partner_values', function (Blueprint $table) {
            $table->foreignId('item_id')
                ->constrained('partner_items')
                ->after('id');
            $table->foreignId('environment_id')
                ->constrained('partner_environments')
                ->after('item_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('partner_values', function (Blueprint $table) {
            $table->dropForeign(['item_id']);
            $table->dropForeign(['environment_id']);
        });

        Schema::drop('partner_values');
    }

}
