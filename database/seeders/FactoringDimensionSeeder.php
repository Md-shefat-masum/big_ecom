<?php

namespace Database\Seeders;

use App\Models\FactoringDimension;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FactoringDimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FactoringDimension::truncate();

        $add = new FactoringDimension();
        $add->factoring_dimension_name = 'Product Depth';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new FactoringDimension();
        $add->factoring_dimension_name = 'Product Height';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        
        $add = new FactoringDimension();
        $add->factoring_dimension_name = 'Product Width';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        
    }
}
