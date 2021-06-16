<?php

namespace Database\Seeders;

use App\Models\StoreSettingSearch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingSearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingSearch::truncate();

        $user = new StoreSettingSearch();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->default_product_sort = "Bestselling";
        $user->default_content_sort = "Alphabetical: A to Z";
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new StoreSettingSearch();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->default_product_sort = "Newest Items";
        $user->default_content_sort = "Alphabetical: Z to A";
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
