<?php

namespace Database\Seeders;

use App\Models\WeightMeasurement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WeightMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WeightMeasurement::truncate();

        $add = new WeightMeasurement();
        $add->weight_measurement_name = 'Kilograms';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new WeightMeasurement();
        $add->weight_measurement_name = 'Grams';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new WeightMeasurement();
        $add->weight_measurement_name = 'Pounds';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
