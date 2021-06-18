<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\StoreSettingDisplay;
use App\Models\StoreSettingWebsite;
use App\Models\StoreSetup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreSetupController extends Controller
{
    public function profile()
    {
        return view('admin.nipa.store-setup.profile');
    }
    public function currencies()
    {
        return view('admin.nipa.store-setup.currencies');
    }
    public function add_currencies()
    {
        return view('admin.nipa.store-setup.add-currencies');
    }
    public function settings()
    {
        
        return view('admin.nipa.store-setup.settings-website');
    }

    public function get_website_settings()
    {
        return StoreSettingWebsite::where('creator', Auth::user()->id)->first();
    }
    public function create_settings_website(Request $request)
    {
        // return $request->all();
        $user_id=Auth::user()->id;

        $creator = StoreSettingWebsite::where('creator', $user_id)->first();

        if (isset($creator)) {
            $add=StoreSettingWebsite::find($creator->id);
            $add->creator = Auth::user()->id;
            $add->slug = $request->slug;
            $add->weight_measurement = $request->weight_measurement;
            $add->length_measurement = $request->length_measurement;
            $add->decimal_token = $request->decimal_token;
            $add->thousands_token = $request->thousands_token;
            $add->decimal_places = $request->decimal_places;
            $add->factoring_dimension = $request->factoring_dimension;
            $add->home_page_title = $request->home_page_title;
            $add->meta_keywords = $request->meta_keywords;
            $add->meta_description = $request->meta_description;
            $add->redirect = $request->redirect;
            $add->save();
            return $add;
          
        } else {
            $add = new StoreSettingWebsite;


            $add->creator = Auth::user()->id;
            $add->slug = $request->slug;
            $add->weight_measurement = $request->weight_measurement;
            $add->length_measurement = $request->length_measurement;
            $add->decimal_token = $request->decimal_token;
            $add->thousands_token = $request->thousands_token;
            $add->decimal_places = $request->decimal_places;
            $add->factoring_dimension = $request->factoring_dimension;
            $add->home_page_title = $request->home_page_title;
            $add->meta_keywords = $request->meta_keywords;
            $add->meta_description = $request->meta_description;
            $add->redirect = $request->redirect;
    
            $add->save();
    
            return $add;
        }
        
  
    }

    public function get_settings_display()
    {
        return StoreSettingDisplay::where('creator', Auth::user()->id)->first();
    }
    public function create_settings_display(Request $request)
    {
        // return $request->all();
        $user_id=Auth::user()->id;

        $creator = StoreSettingDisplay::where('creator', $user_id)->first();

        if (isset($creator)) {
            $add=StoreSettingDisplay::find($creator->id);
            $add->creator = Auth::user()->id;
            $add->slug = $request->slug;
            $add->product_breadcrumbs = $request->product_breadcrumbs;
            $add->show_quantity_box = $request->show_quantity_box;
            $add->enable_search_suggest = $request->enable_search_suggest;
            $add->auto_approve_reviews = $request->auto_approve_reviews;
            $add->enable_wishlist = $request->enable_wishlist;
            $add->enable_product_comparisons = $request->enable_product_comparisons;
            $add->enable_account_creation = $request->enable_account_creation;
            $add->editor = $request->editor;
            $add->product_thumbnails = $request->product_thumbnails;
            $add->category_product_list = $request->category_product_list;
            $add->default_product_sort = $request->default_product_sort;
            $add->menu_display_depth = $request->menu_display_depth;
            $add->show_product_price = $request->show_product_price;
            $add->show_product_sku = $request->show_product_sku;
            $add->show_product_weight = $request->show_product_weight;
            $add->show_product_brand = $request->show_product_brand;
            $add->show_product_shipping_cost = $request->show_product_shipping_cost;
            $add->show_product_rating = $request->show_product_rating;
            $add->show_add_to_cart_link = $request->show_add_to_cart_link;
            $add->default_pre_order_message = $request->default_pre_order_message;
            $add->save();
            return $add;
          
        } else {
            $add = new StoreSettingDisplay;


            $add->creator = Auth::user()->id;
            $add->slug = $request->slug;
            $add->product_breadcrumbs = $request->product_breadcrumbs;
            $add->show_quantity_box = $request->show_quantity_box;
            $add->enable_search_suggest = $request->enable_search_suggest;
            $add->auto_approve_reviews = $request->auto_approve_reviews;
            $add->enable_wishlist = $request->enable_wishlist;
            $add->enable_product_comparisons = $request->enable_product_comparisons;
            $add->enable_account_creation = $request->enable_account_creation;
            $add->editor = $request->editor;
            $add->product_thumbnails = $request->product_thumbnails;
            $add->category_product_list = $request->category_product_list;
            $add->default_product_sort = $request->default_product_sort;
            $add->menu_display_depth = $request->menu_display_depth;
            $add->show_product_price = $request->show_product_price;
            $add->show_product_sku = $request->show_product_sku;
            $add->show_product_weight = $request->show_product_weight;
            $add->show_product_brand = $request->show_product_brand;
            $add->show_product_shipping_cost = $request->show_product_shipping_cost;
            $add->show_product_rating = $request->show_product_rating;
            $add->show_add_to_cart_link = $request->show_add_to_cart_link;
            $add->default_pre_order_message = $request->default_pre_order_message;
    
            $add->save();
    
            return $add;
        }
        
  
    }

    public function settings_display()
    {
        return view('admin.nipa.store-setup.settings-display');
    }
    public function change_password()
    {
        return view('admin.nipa.store-setup.change-password');
    }
    public function additional_authentication()
    {
        return view('admin.nipa.store-setup.additional-authentication');
    }


    
}
