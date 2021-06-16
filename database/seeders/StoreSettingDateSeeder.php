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

        $user = new StoreSettingDate();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->timezone = "Alaska (GMT-9:00)";
        $user->enable_dst_correction = 1;
        $user->display_date_format = "jS M Y";
        $user->extended_display_date_format = "jS M Y @ g:i A";
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();

        $user = new StoreSettingDate();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->timezone = "Beijing (GMT+8:00)";
        $user->enable_dst_correction = 1;
        $user->display_date_format = "jS M Y";
        $user->extended_display_date_format = "jS M Y @ g:i A";
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
