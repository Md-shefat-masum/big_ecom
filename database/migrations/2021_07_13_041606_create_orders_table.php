<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->string('order_status',200)->default('pending');
            $table->string('total_price',100)->nullable();
            $table->string('sub_total',100)->nullable();
            $table->string('invoice_id',100)->nullable();
            $table->string('invoice_date',100)->nullable();
            // total discount
            $table->double('total_discount')->nullable();
            // order coupon
            $table->string('order_coupon', 255)->nullable();
            // coupon discount
            $table->double('coupon_discount', 255)->nullable();
            $table->string('payment_status', 255)->default('pending')->nullable();
            $table->text('delivery_method')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('orders');
    }
}
