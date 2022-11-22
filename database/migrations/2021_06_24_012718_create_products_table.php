<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_name')->nullable();
            $table->string('sku',100)->nullable();
            $table->string('product_type',100)->nullable();
            $table->string('default_price',100)->nullable();
            $table->string('brand_id',100)->nullable();
            $table->string('weight',100)->nullable();

            $table->text('selected_categories')->nullable();
            $table->longText('description')->nullable();
            $table->string('image',100)->nullable();

            $table->string('product_identifier_sku',100)->nullable();
            $table->string('manufacture_part_number',100)->nullable();
            $table->string('product_upc',100)->nullable();
            $table->string('global_trade_number',100)->nullable();
            $table->string('bin_picking_number',100)->nullable();

            $table->string('pricing_default_price',100)->nullable();
            $table->string('tax_class',100)->nullable();
            $table->string('tax_provider_tax_code',100)->nullable();
            $table->string('cost',100)->nullable();
            $table->string('msrp',100)->nullable();
            $table->string('sales_price',100)->nullable();
            $table->text('bulk_pricing_discount_options')->nullable();
            $table->string('bulk_pricing_discount_type',100)->nullable();

            $table->string('track_inventory',100)->nullable();
            $table->string('on_the_product_level',100)->nullable();
            $table->string('track_inventory_on_the_variant_level_stock',100)->nullable();
            $table->string('track_inventory_on_the_variant_level_low_stock',100)->nullable();

            $table->text('selected_variant_options')->nullable();

            $table->text('modifier_options')->nullable();

            $table->string('set_as_store_front',100)->nullable();
            $table->text('search_keywords')->nullable();
            $table->string('sort_order',100)->nullable();
            $table->string('template_layout_file',100)->nullable();
            $table->string('waranty_information',100)->nullable();
            $table->string('availability_text',100)->nullable();
            $table->string('product_condition',100)->nullable();
            $table->string('show_condition_on_storefront',100)->nullable();

            $table->text('custom_fields')->nullable();

            $table->string('automatically_show_related_prodauct_on_my_store_front',100)->nullable();

            $table->string('width',100)->nullable();
            $table->string('height',100)->nullable();
            $table->string('depth',100)->nullable();

            $table->string('fixed_shipping_price',100)->nullable();
            $table->string('free_shipping',100)->nullable();

            $table->string('purchasability',100)->nullable();
            $table->string('preorder_message',100)->nullable();
            $table->string('release_date',100)->nullable();
            $table->string('remove_pre_order_status_on_this_date',100)->nullable();
            $table->string('show_call_for_pricing',100)->nullable();
            $table->string('call_number',100)->nullable();
            $table->string('minimum_purchase_quantity',100)->nullable();
            $table->string('maximum_purchase_quantity',100)->nullable();

            $table->string('wrapping',100)->nullable();

            $table->string('custom_information',100)->nullable();
            $table->text('country_of_origin')->nullable();
            $table->text('comodity_description')->nullable();
            $table->text('hs_codes')->nullable();

            $table->string('page_title',100)->nullable();
            $table->string('product_url',100)->nullable();
            $table->string('meta_description',100)->nullable();

            $table->string('open_graph_sharing_object_type',100)->nullable();
            $table->string('open_graph_use_product_description',100)->nullable();
            $table->string('open_graph_use_product_name',100)->nullable();
            $table->string('open_graph_use_thumbnail_image',100)->nullable();

            $table->longText('variant_values',100)->nullable();

            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);

            $table->timestamps();
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->timestamps();
        });

        Schema::create('color_product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('color_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->timestamps();
        });

        Schema::create('product_size', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('size_id')->nullable();
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('color_product');
        Schema::dropIfExists('product_size');
    }
}
