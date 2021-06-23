<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Image;
use App\Models\Setting;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            UserRoleSeeder::class,
            StoreSettingDateSeeder::class,
            StoreSettingDisplaySeeder::class,
            StoreSettingMiscellaneousSeeder::class,
            StoreSettingSearchSeeder::class,
            StoreSettingSecuritySeeder::class,
            StoreSettingUrlSeeder::class,
            StoreSettingWebsiteSeeder::class,
            ProductOptionSeeder::class,
            BrandSeeder::class,
            // CountrySeeder::class,
            // CitySeeder::class,
        ]);

        Image::truncate();
        Status::truncate();
        // Country::truncate();

        // status
        $data = [
            [
                'name' => strtolower('Active'),
                'serial' => 1,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('Pending'),
                'serial' => 2,
                'creator' => 1,
                'slug' => str::slug(strtolower('Pending')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('processing'),
                'serial' => 3,
                'creator' => 1,
                'slug' => str::slug(strtolower('processing')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('shipping'),
                'serial' => 4,
                'creator' => 1,
                'slug' => str::slug(strtolower('shipping')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('delivered'),
                'serial' => 5,
                'creator' => 1,
                'slug' => str::slug(strtolower('delivered')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('canceled'),
                'serial' => 6,
                'creator' => 1,
                'slug' => str::slug(strtolower('canceled')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('draft'),
                'serial' => 7,
                'creator' => 1,
                'slug' => str::slug(strtolower('draft')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],

        ];
        Status::insert($data);

        // country
        $data = [
            [
                'name' => strtolower('Bangladesh'),
                'lat' => 23.6850,
                'lng' => 90.3563,
                'code' => strtolower('+880'),
                'currency' => strtolower('tk'),
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Country::insert($data);

        // city
        $data = [
            [
                'name' => strtolower('Dhaka'),
                'zip_code' => 1204,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'name' => strtolower('bosurhat'),
                'zip_code' => 1408,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        City::insert($data);

        // company
        $data = [
            [
                'user_id' => 4,
                'name' => strtolower('user'),
                'address1' => 'sahazadpur, companigonj, noakhali, bangladesh',
                'address1' => 'bosurhat, companigonj, noakhali, bangladesh',
                'country_id' => 1,
                'tin' => 85412,
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Company::insert($data);

        // address
        $data = [
            [
                'user_id' => 4,
                'country_id' => 1,
                'city_id' => 1,
                'name' => strtolower('mr. user'),
                'address1' => 'sahazadpur, companigonj, noakhali, bangladesh',
                'address1' => 'bosurhat, companigonj, noakhali, bangladesh',
                'country_name' => 'bangladesh',
                'city_name' => 'dhaka',
                'zip_code' => 85412,
                'phone' => 985632,
                'mobile' => '+880 198125632',
                'comment' => strtolower('good user'),
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Address::insert($data);

        // images
        for ($i = 1; $i <= 18; $i++) {
            Image::insert([
                'name' => 'dummy_products/' . $i . ".jpg",
                'creator' => 1,
                'created_at' => Carbon::now()->toDateTimeString()
            ]);
        }

        // setting
        $data = [
            [
                'logo1' => 'logo1.png',
                'logo2' => 'logo1.png',
                'logo3' => 'logo1.png',
                'watermark_logo' => 'logo1.png',
                'address' => 'sonirakhra, jatrabari, dhaka-1204, bangladesh',
                'city' => 'dhaka',
                'zip_code' => '1204',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.066058198636!2d90.4320398653886!3d23.709334946259837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9a7bb6d225b%3A0xa34a29dda3223421!2sPacific%20Diagnostic%20Center%20%26Consultation%20Center%2037%20%2CSohid%20Faruq%20Road%2CJatrabari%2CDhaka-1204!5e0!3m2!1sen!2sbd!4v1618053406462!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'creator' => 1,
                'slug' => str::slug(strtolower('active')),
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ];
        Setting::insert($data);

    }
}
