<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book";
        $categories = [
            [
                "name" => "men",
                "url" => "/category/men",
                "description" => "$description",
                "parent_id" => null,
                "template_layout_file" => null,
                "sort_order" => null,
                "default_product_sort" => null,
                "category_image" => "",
                "page_title" => "men",
                "meta_keywords" => "men, mens, style, watch",
                "meta_description" => $description,
                "search_keywords" => "men, mens, style, watch",
                "creator" => 1,
                "slug" => "men-".rand(1111,9999),
                "status" => 1,
                "created_at" => Carbon::now()->toDateTimeString()
            ]
        ];
    }
}
