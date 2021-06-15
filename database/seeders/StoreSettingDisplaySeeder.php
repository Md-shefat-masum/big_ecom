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

        $user = new StoreSettingDisplay();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->product_breadcrumbs = 1;
        $user->show_quantity_box = 1;
        $user->enable_search_suggest = 1;
        $user->auto_approve_reviews = 1;
        $user->enable_wishlist = 1;
        $user->enable_product_comparisons = 1;
        $user->enable_account_creation = 1;
        $user->editor = 1;
        $user->product_thumbnails = 1;
        $user->category_product_list = 1;
        $user->default_product_sort = "featured items";
        $user->menu_display_depth = 3;
        $user->show_product_price = 1;
        $user->show_product_sku = 1;
        $user->show_product_weight = 1;
        $user->show_product_brand = 1;
        $user->show_product_shipping_cost = 0;
        $user->show_product_rating = 1;
        $user->show_add_to_cart_link = 1;
        $user->default_pre_order_message = 'Expected release date is %%DATE%%';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new StoreSettingDisplay();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->product_breadcrumbs = 1;
        $user->show_quantity_box = 1;
        $user->enable_search_suggest = 1;
        $user->auto_approve_reviews = 1;
        $user->enable_wishlist = 1;
        $user->enable_product_comparisons = 1;
        $user->enable_account_creation = 1;
        $user->editor = 1;
        $user->product_thumbnails = 1;
        $user->category_product_list = 1;
        $user->default_product_sort = "featured items";
        $user->menu_display_depth = 3;
        $user->show_product_price = 1;
        $user->show_product_sku = 1;
        $user->show_product_weight = 1;
        $user->show_product_brand = 1;
        $user->show_product_shipping_cost = 0;
        $user->show_product_rating = 1;
        $user->show_add_to_cart_link = 1;
        $user->default_pre_order_message = 'Expected release date is %%DATE%%';
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

       
    }
}
