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
            $table->bigInteger('partner_id');
            $table->integer('code');
            $table->string('message', 150);
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('response_messages');
    }

}
