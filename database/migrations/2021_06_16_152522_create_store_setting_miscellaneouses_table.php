<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSettingMiscellaneousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_setting_miscellaneouses', function (Blueprint $table) {
            $table->id();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->string('product_review_emails',200)->nullable();
            $table->string('forward_order_invoices',200)->nullable();
            $table->string('use_smtp_server',200)->nullable();
            $table->string('administrator_email',200)->nullable();
            $table->string('abandoned_cart_notifications',200)->nullable();
            $table->string('require_consent',200)->nullable();
            $table->string('abandoned_cart_emails',200)->nullable();
            $table->string('send_emails_to',200)->nullable();
            $table->string('allow_purchasing',200)->nullable();
            $table->string('starting_order_number',200)->nullable();
            $table->string('enable_throttler',200)->nullable();
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
        Schema::dropIfExists('store_setting_miscellaneouses');
    }
}
