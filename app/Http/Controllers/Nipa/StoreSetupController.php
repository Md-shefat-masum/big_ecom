<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\StoreSettingDate;
use App\Models\StoreSettingDisplay;
use App\Models\StoreSettingSecurity;
use App\Models\StoreSettingUrl;
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

    public function settings_display()
    {
        return view('admin.nipa.store-setup.settings-display');
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
            $add->slug = Auth::user()->first_name;
            $add->product_breadcrumbs = $request->product_breadcrumbs;
            // $add->show_quantity_box = $request->show_quantity_box;
            if($request->has('show_quantity_box'))
            {
                $add->show_quantity_box = 1;
            }else{
                $add->show_quantity_box = 0;
            }
            if($request->has('enable_search_suggest'))
            {
                $add->enable_search_suggest = 1;
            }else{
                $add->enable_search_suggest = 0;
            }
            if($request->has('auto_approve_reviews'))
            {
                $add->auto_approve_reviews = 1;
            }else{
                $add->auto_approve_reviews = 0;
            }
            if($request->has('enable_wishlist'))
            {
                $add->enable_wishlist = 1;
            }else{
                $add->enable_wishlist = 0;
            }
            if($request->has('enable_product_comparisons'))
            {
                $add->enable_product_comparisons = 1;
            }else{
                $add->enable_product_comparisons = 0;
            }
            if($request->has('enable_account_creation'))
            {
                $add->enable_account_creation = 1;
            }else{
                $add->enable_account_creation = 0;
            }
            if($request->has('editor'))
            {
                $add->editor = 1;
            }else{
                $add->editor = 0;
            }
            if($request->has('product_thumbnails'))
            {
                $add->product_thumbnails = 1;
            }else{
                $add->product_thumbnails = 0;
            }

            $add->category_product_list = $request->category_product_list;
            $add->default_product_sort = $request->default_product_sort;
            $add->menu_display_depth = $request->menu_display_depth;

            if($request->has('show_product_price'))
            {
                $add->show_product_price = 1;
            }else{
                $add->show_product_price = 0;
            }
            if($request->has('show_product_sku'))
            {
                $add->show_product_sku = 1;
            }else{
                $add->show_product_sku = 0;
            }

            if($request->has('show_product_weight'))
            {
                $add->show_product_weight = 1;
            }else{
                $add->show_product_weight = 0;
            }

            if($request->has('show_product_brand'))
            {
                $add->show_product_brand = 1;
            }else{
                $add->show_product_brand = 0;
            }

            if($request->has('show_product_shipping_cost'))
            {
                $add->show_product_shipping_cost = 1;
            }else{
                $add->show_product_shipping_cost = 0;
            }

            if($request->has('show_product_rating'))
            {
                $add->show_product_rating = 1;
            }else{
                $add->show_product_rating = 0;
            }
            if($request->has('show_add_to_cart_link'))
            {
                $add->show_add_to_cart_link = 1;
            }else{
                $add->show_add_to_cart_link = 0;
            }

            // $add->enable_search_suggest = $request->enable_search_suggest;
            // $add->auto_approve_reviews = $request->auto_approve_reviews;
            // $add->enable_wishlist = $request->enable_wishlist;
            // $add->enable_product_comparisons = $request->enable_product_comparisons;
            // $add->enable_account_creation = $request->enable_account_creation;
            // $add->editor = $request->editor;
            // $add->product_thumbnails = $request->product_thumbnails;
            // $add->show_product_price = $request->show_product_price;
            // $add->show_product_sku = $request->show_product_sku;
            // $add->show_product_weight = $request->show_product_weight;
            // $add->show_product_brand = $request->show_product_brand;
            // $add->show_product_shipping_cost = $request->show_product_shipping_cost;
            // $add->show_product_rating = $request->show_product_rating;
            // $add->show_add_to_cart_link = $request->show_add_to_cart_link;

            $add->default_pre_order_message = $request->default_pre_order_message;
            $add->save();
            return $add;
          
        } else {
            $add = new StoreSettingDisplay;
            
            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->product_breadcrumbs = $request->product_breadcrumbs;
            // $add->show_quantity_box = $request->show_quantity_box;
            if($request->has('show_quantity_box'))
            {
                $add->show_quantity_box = 1;
            }else{
                $add->show_quantity_box = 0;
            }
            if($request->has('enable_search_suggest'))
            {
                $add->enable_search_suggest = 1;
            }else{
                $add->enable_search_suggest = 0;
            }
            if($request->has('auto_approve_reviews'))
            {
                $add->auto_approve_reviews = 1;
            }else{
                $add->auto_approve_reviews = 0;
            }
            if($request->has('enable_wishlist'))
            {
                $add->enable_wishlist = 1;
            }else{
                $add->enable_wishlist = 0;
            }
            if($request->has('enable_product_comparisons'))
            {
                $add->enable_product_comparisons = 1;
            }else{
                $add->enable_product_comparisons = 0;
            }
            if($request->has('enable_account_creation'))
            {
                $add->enable_account_creation = 1;
            }else{
                $add->enable_account_creation = 0;
            }
            if($request->has('editor'))
            {
                $add->editor = 1;
            }else{
                $add->editor = 0;
            }
            if($request->has('product_thumbnails'))
            {
                $add->product_thumbnails = 1;
            }else{
                $add->product_thumbnails = 0;
            }

            $add->category_product_list = $request->category_product_list;
            $add->default_product_sort = $request->default_product_sort;
            $add->menu_display_depth = $request->menu_display_depth;

            if($request->has('show_product_price'))
            {
                $add->show_product_price = 1;
            }else{
                $add->show_product_price = 0;
            }
            if($request->has('show_product_sku'))
            {
                $add->show_product_sku = 1;
            }else{
                $add->show_product_sku = 0;
            }

            if($request->has('show_product_weight'))
            {
                $add->show_product_weight = 1;
            }else{
                $add->show_product_weight = 0;
            }

            if($request->has('show_product_brand'))
            {
                $add->show_product_brand = 1;
            }else{
                $add->show_product_brand = 0;
            }

            if($request->has('show_product_shipping_cost'))
            {
                $add->show_product_shipping_cost = 1;
            }else{
                $add->show_product_shipping_cost = 0;
            }

            if($request->has('show_product_rating'))
            {
                $add->show_product_rating = 1;
            }else{
                $add->show_product_rating = 0;
            }
            if($request->has('show_add_to_cart_link'))
            {
                $add->show_add_to_cart_link = 1;
            }else{
                $add->show_add_to_cart_link = 0;
            }

            // $add->enable_search_suggest = $request->enable_search_suggest;
            // $add->auto_approve_reviews = $request->auto_approve_reviews;
            // $add->enable_wishlist = $request->enable_wishlist;
            // $add->enable_product_comparisons = $request->enable_product_comparisons;
            // $add->enable_account_creation = $request->enable_account_creation;
            // $add->editor = $request->editor;
            // $add->product_thumbnails = $request->product_thumbnails;
            // $add->show_product_price = $request->show_product_price;
            // $add->show_product_sku = $request->show_product_sku;
            // $add->show_product_weight = $request->show_product_weight;
            // $add->show_product_brand = $request->show_product_brand;
            // $add->show_product_shipping_cost = $request->show_product_shipping_cost;
            // $add->show_product_rating = $request->show_product_rating;
            // $add->show_add_to_cart_link = $request->show_add_to_cart_link;

            $add->default_pre_order_message = $request->default_pre_order_message;
    
            $add->save();
    
            return $add;
        }
        
  
    }


    public function store_settings_date()
    {
        return view('admin.nipa.store-setup.settings-date');
    }

    public function get_store_settings_date()
    {
        return StoreSettingDate::where('creator', Auth::user()->id)->first();
    }
    public function create_store_settings_date(Request $request)
    {
        // return $request->all();
        $user_id=Auth::user()->id;

        $creator = StoreSettingDate::where('creator', $user_id)->first();

        if (isset($creator)) {
            $add=StoreSettingDate::find($creator->id);
            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->timezone = $request->timezone;
            if($request->has('enable_dst_correction'))
            {
                $add->enable_dst_correction = 1;
            }else{
                $add->enable_dst_correction = 0;
            }
            $add->display_date_format = $request->display_date_format;
            $add->extended_display_date_format = $request->extended_display_date_format;
           
        
            $add->save();
            return $add;
          
        } else {

            $add = new StoreSettingDate;

            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->timezone = $request->timezone;
            if($request->has('enable_dst_correction'))
            {
                $add->enable_dst_correction = 1;
            }else{
                $add->enable_dst_correction = 0;
            }
            $add->display_date_format = $request->display_date_format;
            $add->extended_display_date_format = $request->extended_display_date_format;
           
        
            $add->save();
    
            return $add;
        }
        
  
    }


    public function store_settings_url()
    {
        return view('admin.nipa.store-setup.settings-url');
    }

    public function get_store_settings_url()
    {
        return StoreSettingUrl::where('creator', Auth::user()->id)->first();
    }

    public function create_store_settings_url(Request $request)
    {
        // return $request->all();
        $user_id=Auth::user()->id;

        $creator = StoreSettingUrl::where('creator', $user_id)->first();

        if (isset($creator)) {
            $add=StoreSettingUrl::find($creator->id);
            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->product_url_settings = $request->product_url_settings;
            $add->category_url_format = $request->category_url_format;
            $add->web_page_url_format = $request->web_page_url_format;
           
        
            $add->save();
            return $add;
          
        } else {

            $add = new StoreSettingUrl;

            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->product_url_settings = $request->product_url_settings;
            $add->category_url_format = $request->category_url_format;
            $add->web_page_url_format = $request->web_page_url_format;
           
        
            $add->save();
    
            return $add;
        }
        
  
    }


    public function store_settings_security()
    {
        return view('admin.nipa.store-setup.settings-security');
    }

    public function get_store_settings_security()
    {
        return StoreSettingSecurity::where('creator', Auth::user()->id)->first();
    }

    public function create_store_settings_security(Request $request)
    {
        // return $request->all();
        $user_id=Auth::user()->id;

        $creator = StoreSettingSecurity::where('creator', $user_id)->first();

        if (isset($creator)) {
            $add=StoreSettingSecurity::find($creator->id);
            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;

            if($request->has('configure_complexity'))
            {
                $add->configure_complexity = 1;
            }else{
                $add->configure_complexity = 0;
            }
            $add->inactive_shopper_logout = $request->inactive_shopper_logout;
            $add->shopper_activity = $request->shopper_activity;
            $add->control_panel_inactivity = $request->control_panel_inactivity;
            
            if($request->has('enable_recaptcha_on_storefront'))
            {
                $add->enable_recaptcha_on_storefront = 1;
            }else{
                $add->enable_recaptcha_on_storefront = 0;
            }
            $add->recaptcha_site_key = $request->recaptcha_site_key;
            $add->recaptcha_secret_key = $request->recaptcha_secret_key;
            $add->failed_login_lockout = $request->failed_login_lockout;
            
            if($request->has('cookie_consent_tracking'))
            {
                $add->cookie_consent_tracking = 1;
            }else{
                $add->cookie_consent_tracking = 0;
            }
            if($request->has('analytics_for_my_business'))
            {
                $add->analytics_for_my_business = 1;
            }else{
                $add->analytics_for_my_business = 0;
            }
            $add->privacy_policy_url = $request->privacy_policy_url;
            $add->content_security_policy = $request->content_security_policy;
            $add->x_frame_options_header = $request->x_frame_options_header;

            $add->save();
            return $add;
          
        } else {

            $add = new StoreSettingSecurity;

            $add->creator = Auth::user()->id;
            $add->slug = Auth::user()->first_name;
            $add->product_url_settings = $request->product_url_settings;
            $add->category_url_format = $request->category_url_format;
            $add->web_page_url_format = $request->web_page_url_format;
           
        
            $add->save();
    
            return $add;
        }
        
  
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
