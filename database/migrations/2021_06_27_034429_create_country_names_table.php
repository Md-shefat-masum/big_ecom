<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_names', function (Blueprint $table) {
            $table->id();
            $table->string('iso',100)->nullable();
            $table->string('name',200)->nullable();
            $table->string('nicename',200)->nullable();
            $table->string('iso3',200)->nullable();
            $table->string('numcode',200)->nullable();
            $table->string('phonecode',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_names');
    }
}
