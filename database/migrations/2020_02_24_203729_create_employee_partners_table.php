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
			$table->softDeletesTz()->nullable();
		});

        Schema::table('employee_partners', function (Blueprint $table) {
            $table->foreignId('partner_id')->nullable()->constrained('empresas')->after('id')->index('employee_partners_partner_id_idx');;
        });

        Schema::table('employee_partners', function (Blueprint $table) {
            $table->foreignId('employee_id')->nullable()->constrained('empleados')->after('partner_id')->index('employee_partners_employee_id_idx');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee_partners');
    }

}
