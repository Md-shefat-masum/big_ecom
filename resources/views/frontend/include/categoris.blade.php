<!--product area end-->

{{-- @foreach ($category as $item) --}}
{{-- <div class="home_section_style4" id="home-product-category"> --}}
<div class="home_section_style4" id="home-product-category">
    <div class="home_section_design" v-for="category in home_category" :key="category.id">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="section_title s_title_style3">
                                    <h2>@{{category.name}}</h2>

                                </div>
                                <pagination :data="home_category_product" :limit="-1"
                                    @pagination-change-page="getCatroduct">
                                    <div class="product_tab_btn">
                                        <ul class="nav" v-if="home_category">

                                            <li>
                                                <span slot="prev-nav">
                                                {{-- <span slot="prev-nav">&lt; Previous
                                                <span slot="next-nav">Next &gt;</span> --}}
                                                <a style="">
                                                    <i class="ion-ios-arrow-back left-icon"></i>
                                                </a>
                                            </span>
                                            </li>
                                            <li>
                                                <span slot="next-nav">
                                                <a>
                                                    <i class="ion-ios-arrow-forward right-icon"></i>
                                                </a>
                                            </span>
                                            </li>

                                        </ul>
                                    </div>
                                </pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home_style4_inner">
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="category_menu">
                            <div class="category_menu_content">
                                <ul>
                                    <li><a href="#">Computer & Networking</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Networking</a></li>
                                    <li><a href="#">Fashion & Clothing</a></li>
                                    <li><a href="#">Games & Consoles</a></li>
                                    <li><a href="#">Headphone & Speaker</a></li>
                                    <li><a href="#">Mobile & Tablets</a></li>
                                    <li><a href="#">Television & Audio</a></li>
                                </ul>
                            </div>
                            <div class="category_menu_img">
                                <img src="{{ asset('contents/frontend') }}/assets/img/icon/categori-menu1.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <!--product area start-->
                        <div class="product_area">


                            <div class="row no-gutters">
                                <div class="col-md-3" v-for="front_category in home_category_product.data"
                                    :key="front_category.id">
                                    <article class="single_product">

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="{{ asset('contents/frontend') }}/assets/img/product/product17.jpg"
                                                    alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="{{ asset('contents/frontend') }}/assets/img/product/product18.jpg"
                                                    alt=""></a>
                                            <div class="label_product">

                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            title="Add to Wishlist"><i
                                                                class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="ion-ios-settings-strong"></i></a>
                                                    </li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                            data-target="#modal_box" title="quick view"><i
                                                                class="ion-ios-search-strong"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a
                                                        href="product-details.html">@{{front_category.product_name}} </a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$@{{front_category.default_price}}</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!--product area end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endforeach --}}
