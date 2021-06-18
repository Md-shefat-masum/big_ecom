<?php

namespace Database\Seeders;

use App\Models\StoreSettingDate;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingDate::truncate();

        $add = new StoreSettingDate();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->timezone = "Alaska (GMT-9:00)";
        $add->enable_dst_correction = 1;
        $add->display_date_format = "jS M Y";
        $add->extended_display_date_format = "jS M Y @ g:i A";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingDate();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->timezone = "Beijing (GMT+8:00)";
        $add->enable_dst_correction = 1;
        $add->display_date_format = "jS M Y";
        $add->extended_display_date_format = "jS M Y @ g:i A";
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
