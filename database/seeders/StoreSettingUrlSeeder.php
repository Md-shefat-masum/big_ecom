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

        $user = new StoreSettingUrl();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->product_url_settings = 1;
        $user->category_url_format = 2;
        $user->web_page_url_format = 3;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new StoreSettingUrl();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->product_url_settings = 3;
        $user->category_url_format = 1;
        $user->web_page_url_format = 2;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
