<?php

namespace Database\Seeders;

use App\Models\StoreYourTimezone;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreYourTimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        StoreYourTimezone::truncate();

        $add = new StoreYourTimezone();
  
        $add->timezone_name = "Midway Island, Samoa (GMT -11:00)";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
        
        $add = new StoreYourTimezone();
  
        $add->timezone_name = "Hawaii (GMT -10:00)";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreYourTimezone();
  
        $add->timezone_name = "Alaska (GMT -9:00)";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreYourTimezone();
  
        $add->timezone_name = "Pacific Time (US & Canada) (GMT -8:00)";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreYourTimezone();
  
        $add->timezone_name = "Brasília, Buenos Aires, Georgetown (GMT -3:00)";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
