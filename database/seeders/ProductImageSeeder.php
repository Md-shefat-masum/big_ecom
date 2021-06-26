<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            for ($j=0; $j < 4; $j++) {
                ProductImage::create([
                    'product_id' => $i+1,
                    'image' => 'uploads/product/'.rand(1,18).'.jpg',
                    'created_at' => Carbon::now()->toDateTimeString()
                ]);
            }
        }
    }
}
