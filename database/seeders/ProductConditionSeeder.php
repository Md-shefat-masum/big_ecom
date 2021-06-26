<?php

namespace Database\Seeders;

use App\Models\ProductCondition;
use Illuminate\Database\Seeder;

class ProductConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productcondition::create([
            'id' => 1,
            'product_condition_name' => 'new',
            'created_at' => '2021-06-24 08:34:56',
            'updated_at' => '2021-06-26 21:30:42'
        ]);



        Productcondition::create([
            'id' => 2,
            'product_condition_name' => 'used',
            'created_at' => '2021-06-26 21:31:07',
            'updated_at' => '2021-06-26 21:31:07'
        ]);



        Productcondition::create([
            'id' => 3,
            'product_condition_name' => 'refurbished',
            'created_at' => '2021-06-26 21:31:20',
            'updated_at' => '2021-06-26 21:31:20'
        ]);
    }
}
