<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSettingWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_setting_websites', function (Blueprint $table) {
            $table->id();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->string('weight_measurement',100)->nullable();
            $table->string('length_measurement',100)->nullable();
            $table->string('decimal_token',100)->nullable();
            $table->string('thousands_token',100)->nullable();
            $table->string('decimal_places',100)->nullable();
            $table->string('factoring_dimension',100)->nullable();
            $table->string('home_page_title',100)->nullable();
            $table->string('meta_keywords',100)->nullable();
            $table->string('meta_description',100)->nullable();
            $table->string('redirect',100)->nullable();
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
        Schema::dropIfExists('store_setting_websites');
    }
}
