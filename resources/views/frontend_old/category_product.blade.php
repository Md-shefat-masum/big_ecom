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
                            <li v-for="category in home_category" :key="category.id" v-if="category.id <= limit">
                                <a :href="`/category/${category.name}/${category.id}/products`"
                                    @click.prevent="get_widget_category_product({
                                        category_name: category.name.replace(' ','-'),
                                        id: category.id,
                                    },`/category/${category.name.replace(' ','-')}/${category.id}/products`)">
                                    @{{category.name}}
                                </a>
                            </li>

                            <li v-if="limit <= 9">
                                <a @click.prevent="getCatLimit">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    More Categories
                                </a>
                            </li>
                                                        <li v-if="limit >= 10">
                                <a @click.prevent="getCatLimit">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Less Categories
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="widget_list widget_filter">
                        <h3>Filter by price</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="button" @click.prevent="filter_products">Filter</button>
                            <label>Price</label>
                            <input type="text" name="text" id="amount" />

                        </form>

                    </div>

                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">

                <!--shop wrapper start-->
                <div class="row no-gutters shop_wrapper">

                    <div class="col-lg-3 col-md-4 col-12 " v-for="item in products" :key="item.id+(Math.random()*100000)">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html">
                                        <img :src="`/${item.related_images[0].image}`" alt=""></a>

                                    <a class="secondary_img" href="product-details.html" v-if="item.related_images[1]">
                                        <img :src="`/${item.related_images[1].image}`" alt=""></a>
                                    <a class="secondary_img" href="product-details.html" v-else><img
                                            :src="`/${item.related_images[0].image}`" alt=""></a>

                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
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
                                        <h4 class="product_name">
                                            <a href="product-details.html"></a></h4>
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
                                        <button @click.prevent="add_selected_product_for_cart(item)" type="button"
                                            title="Add to cart">
                                            Add to cart
                                        </button>
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
                                            title="Add to cart">Add
                                            to cart</a>
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
                        <div id="demo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script src="{{ asset('contents/frontend') }}/assets/js/paginate.js"></script>
@endpush
@endsection
