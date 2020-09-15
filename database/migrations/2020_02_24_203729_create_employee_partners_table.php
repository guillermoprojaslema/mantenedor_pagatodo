<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePartnersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_partners', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->softDeletesTz();

        });

        Schema::table('employee_partners', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->nullable()
                ->constrained('empresas')
                ->after('id');
            $table->foreignId('employee_id')
                ->nullable()
                ->constrained('empleados')
                ->after('partner_id');
            $table->index('partner_id');
            $table->index('employee_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('employee_partners', function (Blueprint $table) {
            $table->dropForeign(['partner_id']);
            $table->dropForeign(['employee_id']);
            $table->dropIndex(['partner_id']);
            $table->dropIndex(['employee_id']);
        });

        Schema::drop('employee_partners');
    }

}
