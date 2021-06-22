<?php

namespace Database\Seeders;

use App\Models\StoreSettingShare;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingShare::truncate();

        $add = new StoreSettingShare();
        $add->creator = 2;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->facebook = 1;
        $add->twitter = 0;
        $add->instagram = 1;
        $add->linkedin = 1;
        $add->pinterest = 0;
        $add->like = 1;
        $add->email = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new StoreSettingShare();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->facebook = 1;
        $add->twitter = 0;
        $add->instagram = 1;
        $add->linkedin = 1;
        $add->pinterest = 0;
        $add->like = 1;
        $add->email = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
