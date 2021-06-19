<?php

namespace Database\Seeders;

use App\Models\StoreSettingUrl;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingUrl::truncate();

        $add = new StoreSettingUrl();
        $add->creator = 2;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->product_url_settings = 1;
        $add->category_url_format = 2;
        $add->web_page_url_format = 3;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingUrl();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->product_url_settings = 3;
        $add->category_url_format = 1;
        $add->web_page_url_format = 2;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
