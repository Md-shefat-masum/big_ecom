<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductOption;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productoption::create([
            'id' => 1,
            'display_name' => 'color',
            'unique_name' => 'color',
            'type' => 'dropdown',
            'option_values' => '[{\"name\":\"red\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"blue\",\"default\":true,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"yellow\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"greeen\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]',
            'creator' => '1',
            'slug' => '1560ced04a0c321',
            'status' => 1,
            'created_at' => '2021-06-20 05:21:13',
            'updated_at' => '2021-06-20 07:26:01'
        ]);

        ProductOption::create([
            'id' => 2,
            'display_name' => 'Size',
            'unique_name' => 'Size',
            'type' => 'dropdown',
            'option_values' => '[{\"name\":\"xs\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"sm\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"md\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"lg\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"xl\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}},{\"name\":\"xxl\",\"default\":false,\"color_limit\":3,\"colors\":{\"one_color\":\"#000000\",\"two_color\":\"#000000\",\"three_color\":\"#000000\"}}]',
            'creator' => '1',
            'slug' => '3560cf024031dbb',
            'status' => 1,
            'created_at' => '2021-06-20 08:54:24',
            'updated_at' => '2021-06-20 08:54:24'
        ]);
    }
}
