<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert 20 product
        $product_names = [
            "Men's Wash Denim Pant - Ad003 - 7arnf",
            "CUSTOM MADE FASHION SNEAKERS",
            "Cotton Panjabi (Yellow)",
            "China Cotton Fabric Formal Shirt",
            "Karchupi One Piece",
            "Gold Plated Color Beats Locket Pendant",
            "Women's Fashionable Shirt",
            "Kids toys collection1",
            "Plastic Remote Control World Racing",
            "kodomo bath (gentle soft)",
            "Nokshipitha",
            "Teer sugar",
            "Radhuni biryani masala",
            "Shrimp shutki",
            "Pran Tomato Ketchup",
            "Black Seed",
            "Kheshari Dal",
            "Pran Mustard Oil",
            "Maggi Coconut Milk Powder",
            "Ruchi Mixed Fruit Jam",
        ];

        $variant_values = [
            "red,_xs" => [
                "purchasable" => [
                    "variant_red,_xs"
                ],
                "sku" => [
                    null
                ],
                "default_price" => [
                    "550"
                ],
                "sale_price" => [
                    "520"
                ],
                "stock" => [
                    "25"
                ]
            ],
            "red,_sm" => [
                "purchasable" => [
                    "variant_red,_sm"
                ],
                "sku" => [
                    null
                ],
                "default_price" => [
                    "550"
                ],
                "sale_price" => [
                    "510"
                ],
                "stock" => [
                    "45"
                ]
            ],
            "blue,_xs" => [
                "purchasable" => [
                    "variant_blue,_xs"
                ],
                "sku" => [
                    null
                ],
                "default_price" => [
                    "550"
                ],
                "sale_price" => [
                    "530"
                ],
                "stock" => [
                    "50"
                ]
            ],
            "blue,_sm" => [
                "purchasable" => [
                    "variant_blue,_sm"
                ],
                "sku" => [
                    null
                ],
                "default_price" => [
                    "550"
                ],
                "sale_price" => [
                    "540"
                ],
                "stock" => [
                    "65"
                ]
            ]
        ];

        $hs_code = [
            [
                "country" => "bangladesh",
                "code" => "hs-952"
            ],
            [
                "country" => "canada",
                "code" => "hs-987"
            ],
            [
                "country" => "afganistan",
                "code" => "hs-256"
            ]
        ];

        $custom_fields = [
            [
                "name" => "created",
                "value" => "2020"
            ],
            [
                "name" => "expired",
                "value" => "2021"
            ],
            [
                "name" => "return",
                "value" => "no"
            ]
        ];

        $modifier_option = [
            [
                "name" => "user_email",
                "required" => false,
                "type" => "text-field",
                "default_value" => ""
            ],
            [
                "name" => "user_address",
                "required" => false,
                "type" => "text-field",
                "default_value" => ""
            ]
        ];

        $option_value_1 =  [
            [
                "name" => "red",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "blue",
                "default" => true,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "yellow",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "greeen",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ]
        ];

        $option_value_2 = [
            [
                "name" => "xs",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "sm",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "md",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "lg",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "xl",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ],
            [
                "name" => "xxl",
                "default" => false,
                "color_limit" => 3,
                "colors" => [
                    "one_color" => "#000000",
                    "two_color" => "#000000",
                    "three_color" => "#000000"
                ]
            ]
        ];

        $selected_variant_option = $jayParsedAry = [
            [
                "id" => 1,
                "display_name" => "color",
                "unique_name" => "color",
                "type" => "dropdown",
                "option_values" => json_encode($option_value_1),
                "creator" => "1",
                "slug" => "1560ced04a0c321",
                "status" => 1,
                "created_at" => "2021-06-19T23:21:13.000000Z",
                "updated_at" => "2021-06-20T01:26:01.000000Z",
                "option_values_json" => [
                    [
                        "name" => "red",
                        "default" => false,
                        "color_limit" => 3,
                        "colors" => [
                            "one_color" => "#000000",
                            "two_color" => "#000000",
                            "three_color" => "#000000"
                        ]
                    ],
                    [
                        "name" => "blue",
                        "default" => true,
                        "color_limit" => 3,
                        "colors" => [
                            "one_color" => "#000000",
                            "two_color" => "#000000",
                            "three_color" => "#000000"
                        ]
                    ]
                ]
            ],
            [
                "id" => 2,
                "display_name" => "Size",
                "unique_name" => "Size",
                "type" => "dropdown",
                "option_values" => json_encode($option_value_2),
                "creator" => "1",
                "slug" => "3560cf024031dbb",
                "status" => 1,
                "created_at" => "2021-06-20T02:54:24.000000Z",
                "updated_at" => "2021-06-20T02:54:24.000000Z",
                "option_values_json" => [
                    [
                        "name" => "xs",
                        "default" => false,
                        "color_limit" => 3,
                        "colors" => [
                            "one_color" => "#000000",
                            "two_color" => "#000000",
                            "three_color" => "#000000"
                        ]
                    ],
                    [
                        "name" => "sm",
                        "default" => false,
                        "color_limit" => 3,
                        "colors" => [
                            "one_color" => "#000000",
                            "two_color" => "#000000",
                            "three_color" => "#000000"
                        ]
                    ]
                ]
            ]
        ];

        $bulk_pricing_discount_option = [
            [
                "min_quantity" => 2,
                "discount" => "6",
                "unit_price" => "550"
            ],
            [
                "min_quantity" => 4,
                "discount" => "7",
                "unit_price" => "550"
            ]
        ];


        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'product_name' => 'TEST-'.$product_names[$i],
                'sku' => 'TEST-'.rand(1000,9999),
                'product_type' => 'physical',
                'default_price' => rand(200, 600),
                'brand_id' => [1,2,3][rand(0,2)],
                'weight' => '300',
                'selected_categories' => json_encode([rand(1,10),rand(11,20),rand(21,30)]),
                'description' => '
                    Anarkali Salwar suit is a form of women\'s dress originating from the Indian subcontinent. The Anarkali suit is made up of a long, frock-style top and features a slim fitted bottom. ... The word Anarkali literally means the \'delicate bud of the pomegranate flower/ tree\'.


                    The authentic supplier and manufacturer of Daraz, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform all over Bangladesh and serves to the greater extent for achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.

                ',
                'image' => NULL,
                'product_identifier_sku' => 'thx-'.rand(1000,9999),
                'manufacture_part_number' => 'mpn-'.rand(1000,9999),
                'product_upc' => 'ean-'.rand(1000,9999),
                'global_trade_number' => 'gtn-'.rand(1000,9999),
                'bin_picking_number' => 'bpn-'.rand(1000,9999),
                'pricing_default_price' => rand(200, 600),
                'tax_class' => 'shipping',
                'tax_provider_tax_code' => 'luxary-tax-655',
                'cost' => '180',
                'msrp' => '5',
                'sales_price' => rand(200, 600),
                'bulk_pricing_discount_options' => json_encode($bulk_pricing_discount_option),
                'bulk_pricing_discount_type' => 'discount',
                'track_inventory' => 'on',
                'on_the_product_level' => 'on',
                'track_inventory_on_the_variant_level_stock' => rand(500,999),
                'track_inventory_on_the_variant_level_low_stock' => rand(10,50),
                'selected_variant_options' => json_encode($selected_variant_option),
                'modifier_options' => json_encode($modifier_option),
                'set_as_store_front' => 'on',
                'search_keywords' => 'product, shirt, sari, silk, cotton',
                'sort_order' => 'asc',
                'template_layout_file' => 'none',
                'waranty_information' => 'no waranty',
                'availability_text' => 'always available',
                'product_condition' => 'new',
                'show_condition_on_storefront' => 'on',
                'custom_fields' => json_encode($custom_fields),
                'automatically_show_related_prodauct_on_my_store_front' => 'on',
                'width' => '300',
                'height' => '300',
                'depth' => '250',
                'fixed_shipping_price' => '400',
                'free_shipping' => 'on',
                'purchasability' => 'on',
                'preorder_message' => NULL,
                'release_date' => NULL,
                'remove_pre_order_status_on_this_date' => NULL,
                'show_call_for_pricing' => 'on',
                'call_number' => '+880145236',
                'minimum_purchase_quantity' => '1',
                'maximum_purchase_quantity' => '150',
                'wrapping' => 'USE ALL VISIBLE GIFT WRAPPING OPTIONS I\'VE CREATED',
                'custom_information' => 'on',
                'country_of_origin' => NULL,
                'comodity_description' => 'commdity description',
                'hs_codes' => json_encode($hs_code),
                'page_title' => 'polo t-shirt',
                'product_url' => '/'.str_replace(' ','-',$product_names[$i]).'/product-'.rand(1000,3000),
                'meta_description' => 'meta description',
                'open_graph_sharing_object_type' => 'Product',
                'open_graph_use_product_description' => 'on',
                'open_graph_use_product_name' => 'on',
                'open_graph_use_thumbnail_image' => 'on',
                'variant_values' => json_encode($variant_values),
                'creator' => 1,
                'slug' => uniqid(10),
                'status' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
