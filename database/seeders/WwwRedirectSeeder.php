<?php

namespace Database\Seeders;

use App\Models\WwwRedirect;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WwwRedirectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WwwRedirect::truncate();

        $add = new  WwwRedirect();
        $add->www_redirect_name = 'Redirect WWW to no WWW';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();

        $add = new  WwwRedirect();
        $add->www_redirect_name = 'No preference';
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
