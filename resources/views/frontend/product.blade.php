@extends('frontend.frontend')
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_reverse" id="product_list">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_list widget_categories">
                        <h3>Product categories</h3>
                        <ul>
                            <li  v-for="category in home_category" :key="category.id"  v-if="category.id <= limit"><a>@{{category.name}}</a></li>
                   
                            <li v-if="limit <= 9"><a @click.prevent="getCatLimit"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                            <li v-if="limit >= 10"><a @click.prevent="getCatLimit"><i class="fa fa-plus" aria-hidden="true"></i> Less Categories</a></li>
                        </ul>
                        
                    </div>
                    <div class="widget_list widget_filter">
                        <h3>Filter by price</h3>

                        {{-- <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-bookmark icon bg-4"></i>
                                <h3>Filter by price</h3>
                            </div>
                            <div class="filter-by-price p-20-15">
                                <p style="position: unset;">price: <input type="text" v-model="price_range" id="amount" /></p>
                                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0.4%; width: 99.6%;"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0.4%;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                </div>
                                <div class="filter">
                                    <button type="button" @click.prevent="filter_products">filter</button>
                                </div>
                            </div>
                        </div> --}}
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="button" @click.prevent="filter_products">Filter</button>
                            <label>Price</label>
                            <input type="text" name="text" id="amount" />

                        </form>
                        {{-- <form action="#">

                            <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                    style="left: 0%; width: 100%;">
                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 0%;"></span><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 100%;"></span>
                            </div>
                            <button type="submit">Filter</button>
                            <label>Price</label>
                            <input type="text" name="text" id="amount">

                        </form> --}}
                    </div>
                    <div class="widget_list">
                        <h3>Compare Products</h3>
                        <div class="recent_product_container">
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product9.jpg"
                                                alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product10.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Aliquam lobortis pellentesque</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product11.jpg"
                                                alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product12.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Convallis quam sit vitae sodales</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product14.jpg"
                                                alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                src="{{ asset('contents/frontend') }}/assets/img/product/product13.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Cillum dolore nisl fermentum</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="widget_list tags_widget">
                        <h3>Product tags</h3>
                        <div class="tag_cloud">
                            <a href="#">blouse</a>
                            <a href="#">clothes</a>
                            <a href="#">fashion</a>
                            <a href="#">handbag</a>
                            <a href="#">laptop</a>
                        </div>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">


                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip"
                            title="4"></button>
                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                            title="List"></button>
                    </div>

                    <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div>
                    <div class=" niceselect_option">
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sort by average rating</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>
                    </div>
                </div>
                <!--shop toolbar end-->

                <!--shop wrapper start-->
                <div class="row no-gutters shop_wrapper">

                    <div class="col-lg-3 col-md-4 col-12 " v-for="item in product_list.data" :key="item.id">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img
                                            src="{{ asset('contents/frontend') }}/assets/img/product/product7.jpg"
                                            alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img
                                            src="{{ asset('contents/frontend') }}/assets/img/product/product8.jpg"
                                            alt=""></a>
                                    <div class="label_product">
                                        {{-- <span class="label_sale">Sale</span> --}}
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist">
                                                <a href="wishlist.html" title="Add to Wishlist">
                                                    <i class="ion-android-favorite-outline"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#" title="Add to Compare">
                                                    <i class="ion-ios-settings-strong"></i>
                                                </a>
                                            </li>
                                            <li class="quick_button">
                                                <a href="#" @click.prevent="add_selected_product_for_quick_view(item)"
                                                    title="quick view">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                :href="'/product-details/'+item.id">@{{item.product_name}}</a></h4>
                                        {{-- <h4 class="product_name"><a
                                                href="product-details.html"></a></h4> --}}
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$75.00</span>
                                            <span class="current_price">$@{{item.default_price}}</span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        {{-- <form id="form_body" method="POST" enctype="multipart/form-data">
                                            @csrf --}}
                                        {{-- <input type="hidden" name="product_id" value="{{$item->id}}"> --}}
                                        <button @click.prevent="add_selected_product_for_cart(item)" type="button"
                                            title="Add to cart">
                                            Add to cart
                                        </button>
                                        {{-- </form> --}}
                                    </div>
                                </div>

                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="#">@{{item.product_name}}</a>
                                    </h4>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$75.00</span>
                                        <span class="current_price">$@{{item.default_price}}</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus
                                            vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae
                                            urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="#" @click.prevent="add_selected_product_for_cart(item)"
                                            title="Add to cart">Add to cart</a>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist">
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="ion-android-favorite-outline"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#" title="Add to Compare">
                                                    <i lass="ion-ios-settings-strong"></i>
                                                    Compare
                                                </a>
                                            </li>
                                            <li class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                    title="quick view">
                                                    <i class="ion-ios-search-strong"></i>
                                                    quick view
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                </div>



                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
{{-- @push('js')
<script src="{{ asset('contents/admin') }}/frontend_vue.js"></script>
@endpush --}}
@endsection