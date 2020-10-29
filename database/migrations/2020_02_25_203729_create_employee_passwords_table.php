<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePasswordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_passwords', function(Blueprint $table)
		{
			$table->id();
			$table->string('password', 50);
            $table->timestamps();
            $table->softDeletes();
		});

        Schema::table('employee_passwords', function (Blueprint $table) {
            $table->foreignId('empleado_id')
                ->nullable()
                ->constrained()
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
        Schema::table('employee_passwords', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
        });
		Schema::drop('employee_passwords');
	}

}
