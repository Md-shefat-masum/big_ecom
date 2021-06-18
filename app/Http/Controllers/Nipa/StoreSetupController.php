<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
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
    public function update_settings_website(Request $request,$id)
    {
        
        $data=StoreSettingWebsite::get();
        return view('admin.nipa.store-setup.settings-website',compact('data'));
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
