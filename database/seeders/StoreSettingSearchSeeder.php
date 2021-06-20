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

        $add = new StoreSettingSearch();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->default_product_sort = "Bestselling";
        $add->default_content_sort = "Alphabetical: A to Z";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingSearch();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->default_product_sort = "Newest Items";
        $add->default_content_sort = "Alphabetical: Z to A";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
