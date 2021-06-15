<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSettingDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_setting_displays', function (Blueprint $table) {
            $table->id();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->string('product_breadcrumbs',100)->nullable();
            $table->string('show_quantity_box',100)->nullable();
            $table->string('enable_search_suggest',100)->nullable();
            $table->string('auto_approve_reviews',100)->nullable();
            $table->string('enable_wishlist',100)->nullable();
            $table->string('enable_product_comparisons',100)->nullable();
            $table->string('enable_account_creation',100)->nullable();
            $table->string('editor',100)->nullable();
            $table->string('product_thumbnails',100)->nullable();
            $table->string('category_product_list',100)->nullable();
            $table->string('default_product_sort',100)->nullable();
            $table->string('menu_display_depth',100)->nullable();
            $table->string('show_product_price',100)->nullable();
            $table->string('show_product_sku',100)->nullable();
            $table->string('show_product_weight',100)->nullable();
            $table->string('show_product_brand',100)->nullable();
            $table->string('show_product_shipping_cost',100)->nullable();
            $table->string('show_product_rating',100)->nullable();
            $table->string('show_add_to_cart_link',100)->nullable();
            $table->string('default_pre_order_message',100)->nullable();
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
        Schema::dropIfExists('store_setting_displays');
    }
}
