<?php

namespace Database\Seeders;

use App\Models\StoreProductBreadcrumb;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreProductBreadcrumbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreProductBreadcrumb::truncate();

        $add = new StoreProductBreadcrumb();
        $add->product_breadcrumb_name = "Show One Only";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreProductBreadcrumb();
        $add->product_breadcrumb_name = "Don't Show";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
