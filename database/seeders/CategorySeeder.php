<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::create( [
            'id'=>1,
            'name'=>'man',
            'url'=>'/man',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>0,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/Ks7cgcw4i2MeR7ygbETpp4rTzB7angx7Lb6nxAGf.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'14711man',
            'status'=>1,
            'created_at'=>'2021-06-14 22:16:56',
            'updated_at'=>'2021-06-15 15:25:47'
            ] );


            Category::create( [
            'id'=>2,
            'name'=>'t-shirt',
            'url'=>'/t-shirt',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>1,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/dqPQosA3AHli8wMHUFYjAff5rzdrM3WISYOjikcK.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'28461t-shirt',
            'status'=>1,
            'created_at'=>'2021-06-14 22:18:16',
            'updated_at'=>'2021-06-15 15:03:43'
            ] );


            Category::create( [
            'id'=>3,
            'name'=>'jeans pant',
            'url'=>'/jeans-pant',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>1,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/uXKgzVO3aaML2DB7Dd2wc16FCHRtG9qiPjxsrVai.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'36448jeans-pant',
            'status'=>1,
            'created_at'=>'2021-06-14 22:18:41',
            'updated_at'=>'2021-06-15 15:23:31'
            ] );


            Category::create( [
            'id'=>4,
            'name'=>'Panjabi',
            'url'=>'/Panjabi',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>1,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/4ymZ7Ukx02XT4OpTjNhstkh4snf9xa1eMgNloYZL.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'47713panjabi',
            'status'=>1,
            'created_at'=>'2021-06-14 22:18:52',
            'updated_at'=>'2021-06-14 22:18:52'
            ] );


            Category::create( [
            'id'=>5,
            'name'=>'Shoe',
            'url'=>'/Shoe',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>1,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/g51kYV4FggArHSrRaXgHVT2nJfKPEqe2t0ZfEwTP.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'55257shoe',
            'status'=>1,
            'created_at'=>'2021-06-14 22:19:02',
            'updated_at'=>'2021-06-14 22:19:02'
            ] );


            Category::create( [
            'id'=>6,
            'name'=>'Watch',
            'url'=>'/Watch',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>1,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/eqnFlI4szOrJp3GLOgCmaeyVUtfcN1y6yosAO7uh.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'64615watch',
            'status'=>1,
            'created_at'=>'2021-06-14 22:19:17',
            'updated_at'=>'2021-06-14 22:19:17'
            ] );


            Category::create( [
            'id'=>7,
            'name'=>'Pollo',
            'url'=>'/Pollo',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>2,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/9YBKL2jmNqOCndEIzJDmtDNt2pypkm62c8ixIeaz.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'71256pollo',
            'status'=>1,
            'created_at'=>'2021-06-14 22:19:56',
            'updated_at'=>'2021-06-15 14:24:17'
            ] );


            Category::create( [
            'id'=>8,
            'name'=>'Red bull',
            'url'=>'/Red-bull',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>7,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/lw7U92w9Ez7AI5PX6IRgLybSLavvfiZIZONe9L9y.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'84632red-bull',
            'status'=>1,
            'created_at'=>'2021-06-14 22:20:15',
            'updated_at'=>'2021-06-15 14:52:33'
            ] );


            Category::create( [
            'id'=>9,
            'name'=>'Easy',
            'url'=>'/Easy',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>2,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/iDfgAXkCCM1Kc86VLhZzzLfvz41tW6BX4LLB6rpA.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'97259easy',
            'status'=>1,
            'created_at'=>'2021-06-14 22:20:27',
            'updated_at'=>'2021-06-15 14:42:08'
            ] );


            Category::create( [
            'id'=>10,
            'name'=>'Strees',
            'url'=>'/Strees',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>3,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/Ubekd1tJhybs48C6c2QyHHPkN8LBaZzojIQB38sP.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'101428strees',
            'status'=>1,
            'created_at'=>'2021-06-14 22:20:58',
            'updated_at'=>'2021-06-14 22:20:58'
            ] );


            Category::create( [
            'id'=>11,
            'name'=>'Gavatin',
            'url'=>'/Gavatin',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>3,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/nxz787jUOrBL73uRbT8cOFnmh7L1qcIDQkNrEsPu.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'118128gavatin',
            'status'=>1,
            'created_at'=>'2021-06-14 22:21:08',
            'updated_at'=>'2021-06-14 22:21:09'
            ] );


            Category::create( [
            'id'=>12,
            'name'=>'Short',
            'url'=>'/Short',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>3,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/DA0206ccEzNUcFdSBno4w1sMBZ3vSd1LWB953OdX.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'128946short',
            'status'=>1,
            'created_at'=>'2021-06-14 22:21:33',
            'updated_at'=>'2021-06-14 22:21:33'
            ] );


            Category::create( [
            'id'=>13,
            'name'=>'three quater',
            'url'=>'/three-quater',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>3,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/tU6zBSxju0JXZQe2YARnCxYviu8tj1eC3xLsSfhD.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'136883three-quater',
            'status'=>1,
            'created_at'=>'2021-06-14 22:21:49',
            'updated_at'=>'2021-06-15 15:25:51'
            ] );


            Category::create( [
            'id'=>14,
            'name'=>'yellow edited',
            'url'=>'/yellow-edited',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>4,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/McZrAzXwnQy9KSJLGJdSVSHFOW2GAPBEJf9RH9Em.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'144544yellow',
            'status'=>1,
            'created_at'=>'2021-06-14 22:22:17',
            'updated_at'=>'2021-06-15 18:09:01'
            ] );


            Category::create( [
            'id'=>15,
            'name'=>'Sherwani',
            'url'=>'/Sherwani',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>4,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/T13Lqceitjm25ljg5fhyFWem8SDkk8bmrDV7Eett.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'152963sherwani',
            'status'=>1,
            'created_at'=>'2021-06-14 22:22:26',
            'updated_at'=>'2021-06-14 22:22:26'
            ] );


            Category::create( [
            'id'=>16,
            'name'=>'Kabli',
            'url'=>'/Kabli',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>4,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/3Ve0taFen07lb2tbLwSMYs6bHDO2EEX24OQBQ8cc.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'165681kabli',
            'status'=>1,
            'created_at'=>'2021-06-14 22:22:37',
            'updated_at'=>'2021-06-14 22:22:37'
            ] );


            Category::create( [
            'id'=>17,
            'name'=>'Step color',
            'url'=>'/Step-color',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>9,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/FcD9uXgwngh9UbOWRkixw4e1aXo5sKpuoX8MxgAV.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'171148step-color',
            'status'=>1,
            'created_at'=>'2021-06-14 22:23:48',
            'updated_at'=>'2021-06-15 14:42:10'
            ] );


            Category::create( [
            'id'=>18,
            'name'=>'Full Hand',
            'url'=>'/Full-Hand',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>7,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/de5bO0sMfc2eb6sSw8JT9VGEbm5pscxctMLBT4nW.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'187850full-hand',
            'status'=>1,
            'created_at'=>'2021-06-14 22:24:00',
            'updated_at'=>'2021-06-15 14:52:44'
            ] );


            Category::create( [
            'id'=>19,
            'name'=>'half hand',
            'url'=>'/half-hand',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>7,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/V46xTVKHkGNCy6ynLb9U4lppitDESZRrGFnTUiwq.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'194293half-hand',
            'status'=>1,
            'created_at'=>'2021-06-14 22:24:14',
            'updated_at'=>'2021-06-15 14:24:13'
            ] );


            Category::create( [
            'id'=>20,
            'name'=>'band colour',
            'url'=>'/band-colour',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>9,
            'template_layout_file'=>'default',
            'sort_order'=>'0',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/jTY1vNmINyo2G53GLHO47AjnlNXRGg5UoX8TLj6F.png',
            'page_title'=>'man\'s fashion',
            'meta_keywords'=>'man, shirt, t-shirt',
            'meta_description'=>'man, shirt, t-shirt',
            'search_keywords'=>'man, shirt, t-shirt',
            'creator'=>'1',
            'slug'=>'201127band-colour',
            'status'=>1,
            'created_at'=>'2021-06-14 22:24:30',
            'updated_at'=>'2021-06-15 13:52:42'
            ] );


            Category::create( [
            'id'=>21,
            'name'=>'women',
            'url'=>'/women',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>0,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/ibjeId7FTCflUEXTTNz6lvhOUY62hiur2fZiy11q.png',
            'page_title'=>'women collection',
            'meta_keywords'=>'women, sarii, three peice, legenga',
            'meta_description'=>'women, sarii, three peice, legenga',
            'search_keywords'=>'women, sarii, three peice, legenga',
            'creator'=>'1',
            'slug'=>'214913women',
            'status'=>1,
            'created_at'=>'2021-06-14 23:34:04',
            'updated_at'=>'2021-06-15 14:46:13'
            ] );


            Category::create( [
            'id'=>22,
            'name'=>'saari',
            'url'=>'/saari',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>21,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/0cM23BRTKAHPwMjUwAxVt7V0y3TJsz5F7zIboAqj.png',
            'page_title'=>'women sarii',
            'meta_keywords'=>'women sarii',
            'meta_description'=>'women sarii',
            'search_keywords'=>'women sarii',
            'creator'=>'1',
            'slug'=>'221512saari',
            'status'=>1,
            'created_at'=>'2021-06-14 23:40:56',
            'updated_at'=>'2021-06-14 23:40:56'
            ] );


            Category::create( [
            'id'=>23,
            'name'=>'three peice',
            'url'=>'/three-peice',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>21,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/ncyLcrEFJP4s0yIlMzR0ceoRzZJf2dtejzdXRtMA.png',
            'page_title'=>'women sarii',
            'meta_keywords'=>'women sarii',
            'meta_description'=>'women sarii',
            'search_keywords'=>'women sarii',
            'creator'=>'1',
            'slug'=>'235586three-peice',
            'status'=>1,
            'created_at'=>'2021-06-14 23:41:19',
            'updated_at'=>'2021-06-14 23:41:19'
            ] );


            Category::create( [
            'id'=>24,
            'name'=>'one peice',
            'url'=>'/one-peice',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>21,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/8Qfd02BwCX0sUpdZJM2P93tcntiLGUT6onfMncHY.png',
            'page_title'=>'women sarii',
            'meta_keywords'=>'women sarii',
            'meta_description'=>'women sarii',
            'search_keywords'=>'women sarii',
            'creator'=>'1',
            'slug'=>'243247one-peice',
            'status'=>1,
            'created_at'=>'2021-06-14 23:41:37',
            'updated_at'=>'2021-06-15 14:46:15'
            ] );


            Category::create( [
            'id'=>25,
            'name'=>'jewellery',
            'url'=>'/jewellery',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>21,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/nrmo4k9qczQ3L4W9i1av6E0Xx0rWzf0GdCwpEmM1.png',
            'page_title'=>'women sarii',
            'meta_keywords'=>'women sarii',
            'meta_description'=>'women sarii',
            'search_keywords'=>'women sarii',
            'creator'=>'1',
            'slug'=>'253821jewellery',
            'status'=>1,
            'created_at'=>'2021-06-14 23:41:52',
            'updated_at'=>'2021-06-14 23:41:52'
            ] );


            Category::create( [
            'id'=>26,
            'name'=>'bag',
            'url'=>'/bag',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>21,
            'template_layout_file'=>'default',
            'sort_order'=>'1',
            'default_product_sort'=>'5',
            'category_image'=>'uploads/category_image/cAgd3Jkjyk3z8vMfGZpHgfE249dhT1aJnbhBrSns.png',
            'page_title'=>'women sarii',
            'meta_keywords'=>'women sarii',
            'meta_description'=>'women sarii',
            'search_keywords'=>'women sarii',
            'creator'=>'1',
            'slug'=>'265365bag',
            'status'=>1,
            'created_at'=>'2021-06-14 23:42:00',
            'updated_at'=>'2021-06-14 23:42:00'
            ] );


            Category::create( [
            'id'=>27,
            'name'=>'electorinics',
            'url'=>'/electorinics',
            'description'=>'
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book

            ',
            'parent_id'=>0,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'electorinics',
            'status'=>1,
            'created_at'=>'2021-06-15 10:49:11',
            'updated_at'=>'2021-06-15 14:08:09'
            ] );


            Category::create( [
            'id'=>28,
            'name'=>'Kitchen',
            'url'=>'/kitchen',
            'description'=>'


            ',
            'parent_id'=>0,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'Kitchen',
            'status'=>1,
            'created_at'=>'2021-06-15 10:51:34',
            'updated_at'=>'2021-06-15 10:51:34'
            ] );


            Category::create( [
            'id'=>29,
            'name'=>'Education & Office Supplies',
            'url'=>'/education-office-supplies',
            'description'=>'


            ',
            'parent_id'=>0,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'Education & Office Supplies',
            'status'=>1,
            'created_at'=>'2021-06-15 11:51:09',
            'updated_at'=>'2021-06-15 14:35:28'
            ] );


            Category::create( [
            'id'=>30,
            'name'=>'shefat',
            'url'=>'/shefat',
            'description'=>'Stationery Sticker',
            'parent_id'=>29,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'shefat',
            'status'=>1,
            'created_at'=>'2021-06-15 11:55:33',
            'updated_at'=>'2021-06-15 11:55:33'
            ] );

            Category::create( [
            'id'=>31,
            'name'=>'Writing & Correction Supplies',
            'url'=>'/writing-correction-supplies',
            'description'=>'


            ',
            'parent_id'=>29,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'Writing & Correction Supplies',
            'status'=>1,
            'created_at'=>'2021-06-15 11:56:41',
            'updated_at'=>'2021-06-15 11:56:41'
            ] );


            Category::create( [
            'id'=>32,
            'name'=>'Tapes, Adhesives & Fasteners',
            'url'=>'/tapes-adhesives-fasteners',
            'description'=>'
            adsfads asdf',
            'parent_id'=>29,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'tapes-adhesives-fasteners',
            'status'=>1,
            'created_at'=>'2021-06-15 11:58:14',
            'updated_at'=>'2021-06-15 14:51:25'
            ] );


            Category::create( [
            'id'=>33,
            'name'=>'Labels, Indexes & Stamps',
            'url'=>'/labels-indexes-stamps',
            'description'=>'
            You are running Vue in development mode.
            Make sure to turn on production mode when deploying for production.',
            'parent_id'=>29,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'Labels, Indexes & Stamps',
            'status'=>1,
            'created_at'=>'2021-06-15 12:09:23',
            'updated_at'=>'2021-06-15 12:09:23'
            ] );


            Category::create( [
            'id'=>34,
            'name'=>'Office Binding Supplies',
            'url'=>'/office-binding-supplies',
            'description'=>'
            Office Binding Supplies

            ',
            'parent_id'=>29,
            'template_layout_file'=>NULL,
            'sort_order'=>NULL,
            'default_product_sort'=>NULL,
            'category_image'=>NULL,
            'page_title'=>NULL,
            'meta_keywords'=>NULL,
            'meta_description'=>NULL,
            'search_keywords'=>NULL,
            'creator'=>'1',
            'slug'=>'office-binding-supplies',
            'status'=>1,
            'created_at'=>'2021-06-15 12:10:11',
            'updated_at'=>'2021-06-15 12:16:07'
            ] );
    }
}
