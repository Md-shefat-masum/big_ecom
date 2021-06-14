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

        $user = new StoreSettingWebsite();
        $user->creator = 1;
        $user->weight_measurement = 'kg';
        $user->length_measurement = 'cm';
        $user->decimal_token = '.';
        $user->thousands_token = ',';
        $user->decimal_places = '2';
        $user->factoring_dimension = 'product width';
        $user->home_page_title = 'bigecom';
        $user->meta_keywords = 'Meta Keywords';
        $user->meta_description = 'Meta Description';
        $user->redirect = 'http://';
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new StoreSettingWebsite();
        $user->creator = 1;
        $user->weight_measurement = 'gm';
        $user->length_measurement = 'inches';
        $user->decimal_token = '.';
        $user->thousands_token = ',';
        $user->decimal_places = '2';
        $user->factoring_dimension = 'product width2';
        $user->home_page_title = 'bigecom2';
        $user->meta_keywords = 'Meta Keywords2';
        $user->meta_description = 'Meta Description2';
        $user->redirect = 'http://';
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
