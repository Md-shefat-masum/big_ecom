<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payment_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('payment_id')->nullable();
            $table->string('mobile_number', 100)->nullable();
            $table->string('card_number', 100)->nullable();
            $table->string('bank_ac_no', 100)->nullable();
            $table->string('payment_method', 200)->nullable();
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
        Schema::dropIfExists('order_payment_infos');
    }
}
