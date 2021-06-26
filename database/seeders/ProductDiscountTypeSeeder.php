<?php

namespace Database\Seeders;

use App\Models\ProductDiscountType;
use Illuminate\Database\Seeder;

class ProductDiscountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDiscountType::create([
            'id' => 1,
            'discount_type_name' => '% Discount',
            'created_at' => '2021-06-26 21:40:56',
            'updated_at' => '2021-06-26 21:40:56'
        ]);



        Productdiscounttype::create([
            'id' => 2,
            'discount_type_name' => '$ Fixed Amount',
            'created_at' => '2021-06-26 21:41:05',
            'updated_at' => '2021-06-26 21:41:05'
        ]);



        Productdiscounttype::create([
            'id' => 3,
            'discount_type_name' => '$ Off/Unit',
            'created_at' => '2021-06-26 21:41:16',
            'updated_at' => '2021-06-26 21:41:16'
        ]);
    }
}
