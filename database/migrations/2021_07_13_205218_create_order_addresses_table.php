<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->string('first_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('mobile_number',100)->nullable();
            $table->string('email',100)->nullable();
            $table->text('address')->nullable();
            $table->string('city',100)->nullable();
            $table->string('zone',100)->nullable();
            $table->text('comment')->nullable();
            $table->string('creator',100)->nullable();
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
        Schema::dropIfExists('order_addresses');
    }
}
