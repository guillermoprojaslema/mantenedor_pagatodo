<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseMessagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_messages', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('message', 150);
            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Schema::table('response_messages', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->nullable()
                ->constrained('empresas')
                ->after('id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('response_messages', function (Blueprint $table) {
            $table->dropForeign(['partner_id'])
                ->constrained('empresas');
        });

        Schema::drop('response_messages');
    }

}
