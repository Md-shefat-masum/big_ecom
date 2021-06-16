<?php

namespace Database\Seeders;

use App\Models\StoreSettingMiscellaneous;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoreSettingMiscellaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreSettingMiscellaneous::truncate();

        $user = new StoreSettingMiscellaneous();
        $user->creator = 1;
        $user->slug = 'super_admin';
        $user->status = 1;
        $user->product_review_emails = 1;
        $user->forward_order_invoices = 2;
        $user->use_smtp_server = 1;
        $user->administrator_email = "demo@gmail.com";
        $user->abandoned_cart_notifications = 1;
        $user->require_consent = 0;
        $user->abandoned_cart_emails = 1;
        $user->send_emails_to = "demo@gmail.com";
        $user->allow_purchasing = 1;
        $user->starting_order_number = "100";
        $user->enable_throttler = 1;
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->save();
    }
}
