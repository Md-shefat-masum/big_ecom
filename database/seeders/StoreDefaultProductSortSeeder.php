<?php

namespace Database\Seeders;

use App\Models\StoreDefaultProductSort;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreDefaultProductSortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreDefaultProductSort::truncate();

        $add = new StoreDefaultProductSort();
        $add->default_product_sort_name = 'Featured Items';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        $add = new StoreDefaultProductSort();
        $add->default_product_sort_name = 'Newest Items';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        $add = new StoreDefaultProductSort();
        $add->default_product_sort_name = 'Bestselling';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        $add = new StoreDefaultProductSort();
        $add->default_product_sort_name = 'Alphabetical: A to Z';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
