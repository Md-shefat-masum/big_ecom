<?php

namespace Database\Seeders;

use App\Models\StoreSettingSecurity;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingSecuritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingSecurity::truncate();

        $add = new StoreSettingSecurity();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->configure_complexity = 1;
        $add->inactive_shopper_logout = 2;
        $add->shopper_activity = 1;
        $add->control_panel_inactivity = 1;
        $add->enable_recaptcha_on_storefront = 1;
        $add->recaptcha_site_key = "abcd";
        $add->recaptcha_secret_key = "abcd";
        $add->failed_login_lockout = 10;
        $add->cookie_consent_tracking = 1;
        $add->privacy_policy_url = "https://example.com/privacy-policy";
        $add->analytics_for_my_business = 1;
        $add->hsts_settings = 2;
        $add->content_security_policy = 1;
        $add->x_frame_options_header = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
