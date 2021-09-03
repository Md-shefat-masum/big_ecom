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

        for ($i=1; $i <= Category::count() ; $i++) {
            if($i%2 == 0){
                for ($j=1; $j <= 20; $j++) {
                    DB::table('category_product')->insert([
                        'category_id' => $i,
                        'product_id' => rand(1,20),
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                }
            }else{
                for ($j=20; $j >= 1; $j--) {
                    DB::table('category_product')->insert([
                        'category_id' => $i,
                        'product_id' => rand(1,20),
                        'created_at' => Carbon::now()->toDateTimeString(),
                    ]);
                }
            }

        }


    }
}
