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
<div class="shop_area shop_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_list widget_categories">
                        <h3>Product categories</h3>
                        <ul>
                            <li><a href="#">Cameras & Camcoders</a></li>
                            <li class="widget_sub_categories"><a href="javascript:void(0)">Computer & Networking</a>
                                <ul class="widget_dropdown_categories">
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Networking</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Games & Consoles</a></li>
                            <li><a href="#">Headphone & Speaker</a></li>
                            <li><a href="#">Movies & Video Games</a></li>
                            <li><a href="#">Smartphone</a> </li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                    <div class="widget_list widget_filter">
                        <h3>Filter by price</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="submit">Filter</button>
                            <input type="text" name="text" id="amount" />

                        </form>
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

                    @foreach ($data as $item)

                    <div class="col-lg-3 col-md-4 col-12 ">
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
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i
                                                        class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#ppp{{$item->id}}" title="quick view"><i
                                                        class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a
                                                href="product-details.html">{{$item->product_name}}</a></h4>
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
                                            <span class="current_price">${{$item->default_price}}</span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart" id="add_to_cart">
                                        <form id="form_body" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$item->id}}">
                                            <button @click.prevent="store" type="button" title="Add to cart">Add to
                                                cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">{{$item->product_name}}</a>
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
                                        <span class="current_price">${{$item->default_price}}</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus
                                            vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae
                                            urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="Add to cart">Add to cart</a>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                        class="ion-android-favorite-outline"></i> Add to Wishlist</a>
                                            </li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i
                                                        class="ion-ios-settings-strong"></i> Compare</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal"
                                                    data-target="#modal_box" title="quick view"><i
                                                        class="ion-ios-search-strong"></i> quick view</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>

                    <div class="modal fade" id="ppp{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <div class="modal_tab">
                                                    <div class="tab-content product-details-large">
                                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                            <div class="modal_tab_img">
                                                                <a href="#"><img src="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                            <div class="modal_tab_img">
                                                                <a href="#"><img src="{{ asset('contents/frontend') }}/assets/img/product/productbig3.jpg" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                            <div class="modal_tab_img">
                                                                <a href="#"><img src="{{ asset('contents/frontend') }}/assets/img/product/productbig4.jpg" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                            <div class="modal_tab_img">
                                                                <a href="#"><img src="{{ asset('contents/frontend') }}/assets/img/product/productbig5.jpg" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal_tab_button">
                                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                                            <li>
                                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                                                    aria-controls="tab1" aria-selected="false"><img
                                                                        src="{{ asset('contents/frontend') }}/assets/img/product/product1.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                                                    aria-controls="tab2" aria-selected="false"><img
                                                                        src="{{ asset('contents/frontend') }}/assets/img/product/product6.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                                        src="{{ asset('contents/frontend') }}/assets/img/product/product9.jpg" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                                                    aria-controls="tab4" aria-selected="false"><img
                                                                        src="{{ asset('contents/frontend') }}/assets/img/product/product14.jpg" alt=""></a>
                                                            </li>
                
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="modal_right">
                                                    <div class="modal_title mb-10">
                                                        <h2>{{$item->product_name}}</h2>
                                                    </div>
                                                    <div class="modal_price mb-10">
                                                        <span class="new_price">${{$item->default_price}}</span>
                                                        <span class="old_price">$78.99</span>
                                                    </div>
                                                    <div class="modal_description mb-15">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                                            recusandae </p>
                                                    </div>
                                                    <div class="variants_selects">
                                                        <div class="variants_size">
                                                            <h2>size</h2>
                                                            <select class="select_option">
                                                                <option selected value="1">s</option>
                                                                <option value="1">m</option>
                                                                <option value="1">l</option>
                                                                <option value="1">xl</option>
                                                                <option value="1">xxl</option>
                                                            </select>
                                                        </div>
                                                        <div class="variants_color">
                                                            <h2>color</h2>
                                                            <select class="select_option">
                                                                <option selected value="1">purple</option>
                                                                <option value="1">violet</option>
                                                                <option value="1">black</option>
                                                                <option value="1">pink</option>
                                                                <option value="1">orange</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal_add_to_cart">
                                                            <form action="#">
                                                                <input min="1" max="100" step="2" value="1" type="number">
                                                                <button type="submit">add to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal_social">
                                                        <h2>Share this product</h2>
                                                        <ul>
                                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
@push('js')
<script src="{{ asset('contents/admin') }}/frontend_vue.js"></script>
@endpush
@endsection