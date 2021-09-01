<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->truncate();

        for ($i=1; $i <= 20 ; $i++) {
            for ($j=1; $j < 5; $j++) {
                DB::table('category_product')->insert([
                    'category_id' => $i,
                    'product_id' => rand(1,20),
                    'created_at' => Carbon::now()->toDateTimeString(),
                ]);
            }
        }


    }
}
