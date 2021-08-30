<div class="header_bottom header_bottom7">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-6">
            <div class="categories_menu categories_seven">
                <div class="categories_title">
                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                </div>
                <div class="categories_menu_toggle" style="display: {{ request()->is('/') ? 'block' : 'none' }};"  id="home-product-category-top">
                    <ul>

                        <li class="menu_item_children" v-for="(category , index) in home_category" :key="category.id"  v-if="category.id <= limit">
                            <a href="#">@{{category.name}}
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <ul class="categories_mega_menu">
                                <li class="menu_item_children menu_item_children_design"
                                    v-for="subcategory in home_category" :key="subcategory.id"
                                    v-if="subcategory.id == category.parent_id">
                                    <a href="#">Dresses1
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    {{-- <ul class="categories_mega_menu_two">
                                        <li class="menu_item_children menu_item_children_design"><a href="#">Sweater2 <i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="categories_mega_menu_three">
                                                <li class="menu_item_children menu_item_children_design"><a
                                                        href="#">Sweater3 <i class="fa fa-angle-right"></i></a>
                                                    <ul class="categories_mega_menu_four">
                                                        <li class="menu_item_children menu_item_children_design"><a
                                                                href="#">Sweater4 <i class="fa fa-angle-right"></i></a>
                                                            <ul class="categories_mega_menu_five">
                                                                <li
                                                                    class="menu_item_children menu_item_children_design">
                                                                    <a href="#">Sweater5 <i
                                                                            class="fa fa-angle-right"></i></a>
                                                                    <ul class="categories_mega_menu_six">
                                                                        <li
                                                                            class="menu_item_children menu_item_children_design">
                                                                            <a href="#">Sweater6</a></li>
                                                                        <li
                                                                            class="menu_item_children menu_item_children_design">
                                                                            <a href="#">Sweater6</a></li>

                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="menu_item_children menu_item_children_design">
                                                                    <a href="#">Sweater5</a></li>

                                                            </ul>
                                                        </li>
                                                        <li class="menu_item_children menu_item_children_design"><a
                                                                href="#">Sweater4</a></li>

                                                    </ul>
                                                </li>
                                                <li class="menu_item_children menu_item_children_design"><a
                                                        href="#">Sweater3</a></li>

                                            </ul>
                                        </li>

                                    </ul> --}}
                                </li>
                            </ul>

                        </li>

                        <li v-if="limit <= 9"><a href="#" @click.prevent="getCatLimit"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                        <li v-if="limit >= 10"><a href="#" @click.prevent="getCatLimit"><i class="fa fa-plus" aria-hidden="true"></i> Less Categories</a></li>


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
