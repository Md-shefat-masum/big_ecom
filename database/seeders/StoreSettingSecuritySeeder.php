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

        $user = new StoreSettingSecurity();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->configure_complexity = 1;
        $user->inactive_shopper_logout = 2;
        $user->shopper_activity = 1;
        $user->control_panel_inactivity = "2 hours";
        $user->enable_recaptcha_on_storefront = 1;
        $user->recaptcha_site_key = "abcd";
        $user->recaptcha_secret_key = "abcd";
        $user->failed_login_lockout = 10;
        $user->cookie_consent_tracking = 1;
        $user->privacy_policy_url = "https://example.com/privacy-policy";
        $user->analytics_for_my_business = 1;
        $user->hsts_settings = 2;
        $user->content_security_policy = 1;
        $user->x_frame_options_header = 1;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
