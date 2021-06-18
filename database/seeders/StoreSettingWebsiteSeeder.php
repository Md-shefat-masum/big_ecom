<?php

namespace Database\Seeders;

use App\Models\StoreSettingWebsite;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StoreSettingWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingWebsite::truncate();

        $add = new StoreSettingWebsite();
        $add->creator = 2;
        $add->weight_measurement = 1;
        $add->length_measurement = 2;
        $add->decimal_token = '.';
        $add->thousands_token = ',';
        $add->decimal_places = '2';
        $add->factoring_dimension = 1;
        $add->home_page_title = 'bigecom';
        $add->meta_keywords = 'Meta Keywords';
        $add->meta_description = 'Meta Description';
        $add->redirect = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingWebsite();
        $add->creator = 1;
        $add->weight_measurement = 2;
        $add->length_measurement = 1;
        $add->decimal_token = '.';
        $add->thousands_token = ',';
        $add->decimal_places = '2';
        $add->factoring_dimension = 2;
        $add->home_page_title = 'bigecom2';
        $add->meta_keywords = 'Meta Keywords2';
        $add->meta_description = 'Meta Description2';
        $add->redirect = 2;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
