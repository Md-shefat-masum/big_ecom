<div class="header_bottom header_bottom7">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-6">
            <div class="categories_menu categories_seven">
                <div class="categories_title">
                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                </div>
                <div class="categories_menu_toggle" style="display: {{ request()->is('/') ? 'block' : 'none' }};" >
                    <ul id="nav_menu">
                        @php
                            function printNestedArray($a,$parent_id) {
                                // dd($a);
                                $a = (object) $a;
                                $id = $a->id;
                                $category_name = $a->name;
                                $has_child = isset($a->child) && is_array($a->child) && count($a->child)>0;
                                $route = route('website_category_products',[strtolower(str_replace(' ','-',$a->name)),$a->id]);

                                $arrow = "";
                                if($has_child){
                                    $arrow = "<i class='fa fa-angle-right'></i>";
                                }
                                echo "
                                    <li class='menu_item_children'>
                                        <a href='{$route}'> {$category_name}
                                            {$arrow}
                                        </a>
                                ";

                                if ( $has_child ) {
                                    echo "<ul>";
                                        // dd($a->child);
                                        foreach ($a->child as $child) {
                                            $child = (object) $child;
                                            $module = $child->name.'_'.$child->id;
                                            printNestedArray($child,$a->id);
                                        }
                                    echo "</ul>";
                                }

                                echo "</li>";
                            }
                            $categories = App\Http\Controllers\Admin\Product\ProductController::static_categories_tree_json();
                            // dd($categories);
                            foreach ($categories as $key => $category) {
                                $category = (object) $category;
                                printNestedArray($category,$category->id);
                            }
                        @endphp
                    </ul>
                </div>
            </div>
        </div>
        <div class=" col-lg-6 colm_none">
            <div class="search_container search_seven_c" id="search_product">
                <form action="#">
                    {{-- <div class="hover_category">
                                        <select class="select_option" name="select" id="categori2">
                                            <option selected value="1">All Categories</option>
                                            <option value="2">Accessories</option>
                                            <option value="3">Accessories & More</option>
                                            <option value="4">Butters & Eggs</option>
                                            <option value="5">Camera & Video </option>
                                            <option value="6">Mornitors</option>
                                            <option value="7">Tablets</option>
                                            <option value="8">Laptops</option>
                                            <option value="9">Handbags</option>
                                            <option value="10">Headphone & Speaker</option>
                                            <option value="11">Herbs & botanicals</option>
                                            <option value="12">Vegetables</option>
                                            <option value="13">Shop</option>
                                            <option value="14">Laptops & Desktops</option>
                                            <option value="15">Watchs</option>
                                            <option value="16">Electronic</option>
                                        </select>
                                    </div> --}}
                    <div class="search_box">
                        <input type="text" v-model="search_key" style="padding-left:10px;"
                            placeholder="Search Products…" />
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>

        </div>
        <div class=" col-lg-3 col-md-6">
            <div class="header_bigsale">
                <a href="#">BIG SALE BLACK FRIDAY</a>
            </div>
        </div>
    </div>
</div>
