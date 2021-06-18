<?php

namespace Database\Seeders;

use App\Models\LengthMeasurement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LengthMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LengthMeasurement::truncate();

        $add = new LengthMeasurement();
        $add->length_measurement_name = 'Inches';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new LengthMeasurement();
        $add->length_measurement_name = 'Centimeters';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        
        $add = new LengthMeasurement();
        $add->length_measurement_name = 'Meters';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
