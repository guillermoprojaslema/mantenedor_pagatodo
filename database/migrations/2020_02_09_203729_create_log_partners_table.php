<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPartnersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_partners', function (Blueprint $table) {
            $table->id();
            $table->text('request')
                ->nullable();
            $table->text('response')
                ->nullable();
            $table->text('requested_url')
                ->nullable();
            $table->string('requested_method', 2044)
                ->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();

        });

        Schema::table('log_partners', function (Blueprint $table) {
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
        Schema::drop('log_partners');
    }

}
