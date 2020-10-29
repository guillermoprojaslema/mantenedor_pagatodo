<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentascitisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentascitis', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cuenta', 50)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cuentascitis', function (Blueprint $table) {
            $table->foreignId('cedulasciti_id')
                ->nullable()
                ->constrained('cedulascitis')
                ->after('id');
            $table->foreignId('moneda_id')
                ->nullable()
                ->constrained()
                ->after('cedulasciti_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuentascitis', function (Blueprint $table) {
            $table->dropForeign(['cedulasciti_id']);
            $table->dropForeign(['moneda_id']);
        });

        Schema::drop('cuentascitis');
    }

}
