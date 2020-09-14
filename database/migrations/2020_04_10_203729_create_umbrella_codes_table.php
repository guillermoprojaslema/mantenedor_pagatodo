<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmbrellaCodesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umbrella_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code_id', 30)->unique('umbrella_codes_code_id_key');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('umbrella_codes', function (Blueprint $table) {
            $table->foreignId('payment_id')
                ->constrained('pagos')
                ->nullable()
                ->after('status');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('umbrella_codes');
    }

}
