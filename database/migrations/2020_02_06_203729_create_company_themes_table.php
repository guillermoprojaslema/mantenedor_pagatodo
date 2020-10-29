<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyThemesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_themes', function (Blueprint $table) {
            $table->id();
            $table->boolean('activo')
                ->nullable();
            $table->string('nombre_tema', 250)
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('company_themes', function (Blueprint $table) {
            $table->foreignId('recaudadora_id')
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
        Schema::table('company_themes', function (Blueprint $table) {
            $table->dropForeign(['recaudadora_id']);
        });

        Schema::drop('company_themes');
    }

}
