<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'id' => 1,
            'name' => 'oppo',
            'creator' => '1',
            'slug' => '1560d35bae736e5',
            'status' => 1,
            'created_at' => '2021-06-23 16:05:02',
            'updated_at' => '2021-06-23 16:05:02'
        ]);

        Brand::create([
            'id' => 2,
            'name' => 'Plus point',
            'creator' => '1',
            'slug' => '2560d35bb58a944',
            'status' => 1,
            'created_at' => '2021-06-23 16:05:09',
            'updated_at' => '2021-06-23 16:05:09'
        ]);

        Brand::create([
            'id' => 3,
            'name' => 'Easy',
            'creator' => '1',
            'slug' => '3560d35bbc00235',
            'status' => 1,
            'created_at' => '2021-06-23 16:05:15',
            'updated_at' => '2021-06-23 16:05:16'
        ]);
    }
}
