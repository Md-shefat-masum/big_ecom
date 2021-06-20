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

        $add = new StoreSettingMiscellaneous();
        $add->creator = 1;
        $add->slug = 'super_admin';
        $add->status = 1;
        $add->product_review_emails = 1;
        $add->forward_order_invoices = 2;
        $add->use_smtp_server = 1;
        $add->administrator_email = "demo@gmail.com";
        $add->abandoned_cart_notifications = 1;
        $add->require_consent = 0;
        $add->abandoned_cart_emails = 1;
        $add->send_emails_to = "demo@gmail.com";
        $add->allow_purchasing = 1;
        $add->starting_order_number = "100";
        $add->enable_throttler = 1;
        $add->created_at = Carbon::now()->toDateTimeString();
        $add->save();
    }
}
