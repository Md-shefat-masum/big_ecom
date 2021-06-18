<?php

namespace Database\Seeders;

use App\Models\StoreSettingDisplay;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingDisplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingDisplay::truncate();

        $add = new StoreSettingDisplay();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->product_breadcrumbs = 1;
        $add->show_quantity_box = 1;
        $add->enable_search_suggest = 1;
        $add->auto_approve_reviews = 1;
        $add->enable_wishlist = 1;
        $add->enable_product_comparisons = 1;
        $add->enable_account_creation = 1;
        $add->editor = 1;
        $add->product_thumbnails = 1;
        $add->category_product_list = 1;
        $add->default_product_sort = "featured items";
        $add->menu_display_depth = 3;
        $add->show_product_price = 1;
        $add->show_product_sku = 1;
        $add->show_product_weight = 1;
        $add->show_product_brand = 1;
        $add->show_product_shipping_cost = 0;
        $add->show_product_rating = 1;
        $add->show_add_to_cart_link = 1;
        $add->default_pre_order_message = 'Expected release date is %%DATE%%';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingDisplay();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->product_breadcrumbs = 1;
        $add->show_quantity_box = 1;
        $add->enable_search_suggest = 1;
        $add->auto_approve_reviews = 1;
        $add->enable_wishlist = 1;
        $add->enable_product_comparisons = 1;
        $add->enable_account_creation = 1;
        $add->editor = 1;
        $add->product_thumbnails = 1;
        $add->category_product_list = 1;
        $add->default_product_sort = "featured items";
        $add->menu_display_depth = 3;
        $add->show_product_price = 1;
        $add->show_product_sku = 1;
        $add->show_product_weight = 1;
        $add->show_product_brand = 1;
        $add->show_product_shipping_cost = 0;
        $add->show_product_rating = 1;
        $add->show_add_to_cart_link = 1;
        $add->default_pre_order_message = 'Expected release date is %%DATE%%';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

       
    }
}
