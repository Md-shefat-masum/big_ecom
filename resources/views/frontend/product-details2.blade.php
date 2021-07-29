@extends('frontend.frontend')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<div class="product_page_bg">
    <div class="container">
        <div class="product_details_wrapper mb-55">
            <!--product details start-->
            <div class="product_details">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1"
                                        src="{{ asset('contents/frontend') }}/assets/img/product/productbig5.jpg"
                                        data-zoom-image="{{ asset('contents/frontend') }}/assets/img/product/productbig5.jpg"
                                        alt="big-1">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('contents/frontend') }}/assets/img/product/productbig4.jpg"
                                            data-zoom-image="{{ asset('contents/frontend') }}/assets/img/product/productbig4.jpg">
                                            <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig4.jpg"
                                                alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('contents/frontend') }}/assets/img/product/productbig1.jpg"
                                            data-zoom-image="{{ asset('contents/frontend') }}/assets/img/product/productbig1.jpg">
                                            <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig1.jpg"
                                                alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg"
                                            data-zoom-image="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg">
                                            <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg"
                                                alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                            data-image="{{ asset('contents/frontend') }}/assets/img/product/productbig3.jpg"
                                            data-zoom-image="{{ asset('contents/frontend') }}/assets/img/product/productbig3.jpg">
                                            <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig3.jpg"
                                                alt="zo-th-1" />
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6" id="product-details">
                        <div class="product_d_right">
                            <form action="#">

                                <h3><a href="#"> @{{this.product_item.product_name}}</a></h3>
                                <div class="product_nav">
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i
                                                    class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i
                                                    class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                        <li class="review"><a href="#">(1 customer review )</a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="old_price">$80.00</span>
                                    <span class="current_price">$@{{this.product_item.sales_price}}</span>
                                </div>
                                <div class="product_desc">
                                    <p>@{{this.product_item.description}} </p>
                                </div>
                                <div class="product_variant color">
                                    <h3>Available Options</h3>
                                    <label>color</label>
                                    <ul>
                                        <li class="color1"><a href="#"></a></li>
                                        <li class="color2"><a href="#"></a></li>
                                        <li class="color3"><a href="#"></a></li>
                                        <li class="color4"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="product_variant quantity">
                                    <label>quantity</label>
                                    <input min="1" max="100" value="1" v-model="cart_option.qty" type="number">
                                    <button @click.prevent="add_new_product_to_cart(
                                                            {
                                                                cart_option,
                                                                product: product_item
                                                            }
                                                        )" type="button" title="Add to cart">
                                        Add to cart
                                    </button>

                                </div>
                                <div class=" product_d_action">
                                    <ul>
                                        <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                        <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                    </ul>
                                </div>
                                <div class="product_meta">
                                    <span>Product SKU: <a href="#">@{{this.product_item.sku}}</a></span> <br />
                                    <span>Product Type: <a href="#">@{{this.product_item.product_type}}</a></span>
                                    <br />

                                    <span>
                                        Category: <div v-for="pcatname in this.product_item.category_json">
                                            <div href="#" v-for="category in categories">
                                                <a v-if="category.id == pcatname">@{{category.name}}</a>
                                            </div>
                                        </div>
                                    </span>

                                    <span>Brand: <a href="#">@{{this.product_item.brand_id}}</a></span> <br />
                                    <span>Weight: <a href="#">@{{this.product_item.weight}}</a></span> <br />
                                    <span>Description: <a href="#">@{{this.product_item.description}}</a></span> <br />
                                    <span>product_identifier_sku: <a
                                            href="#">@{{this.product_item.product_identifier_sku}}</a></span> <br />
                                    <span>manufacture_part_number: <a
                                            href="#">@{{this.product_item.manufacture_part_number}}</a></span> <br />
                                    <span>product_upc: <a href="#">@{{this.product_item.product_upc}}</a></span> <br />
                                    <span>global_trade_number: <a
                                            href="#">@{{this.product_item.global_trade_number}}</a></span> <br />
                                    <span>bin_picking_number: <a
                                            href="#">@{{this.product_item.bin_picking_number}}</a></span> <br />
                                    <span>pricing_default_price: <a
                                            href="#">@{{this.product_item.pricing_default_price}}</a></span> <br />
                                    <span>tax_class: <a href="#">@{{this.product_item.tax_class}}</a></span> <br />
                                    <span>tax_provider_tax_code: <a
                                            href="#">@{{this.product_item.tax_provider_tax_code}}</a></span> <br />
                                    <span>cost: <a href="#">@{{this.product_item.cost}}</a></span> <br />
                                    <span>msrp: <a href="#">@{{this.product_item.msrp}}</a></span> <br />
                                    <span>sales_price: <a href="#">@{{this.product_item.sales_price}}</a></span> <br />
                                    <span>bulk_pricing_discount_options:
                                        <div
                                            v-for="bulk_pricing in this.product_item.bulk_pricing_discount_options_json">
                                            <a href="#">Minimum Quantity: @{{bulk_pricing.min_quantity}} ||
                                                Discount: @{{bulk_pricing.discount}}% ||
                                                Unit Price: @{{bulk_pricing.unit_price}} <br> </a>
                                            <a href="#">Minimum Quantity: @{{bulk_pricing.min_quantity}} || Discount:
                                                @{{bulk_pricing.discount}}% ||
                                                Unit Price: @{{bulk_pricing.unit_price}} || Total Price:
                                                @{{(bulk_pricing.unit_price)-((bulk_pricing.unit_price)*((bulk_pricing.discount)/(100)))}}
                                                <br> </a>
                                        </div>
                                    </span>
                                    <br />
                                    <span>bulk_pricing_discount_type: <a
                                            href="#">@{{this.product_item.bulk_pricing_discount_type}}</a></span> <br />
                                    <span>track_inventory: <a href="#">@{{this.product_item.track_inventory}}</a></span>
                                    <br />
                                    <span>on_the_product_level: <a
                                            href="#">@{{this.product_item.on_the_product_level}}</a></span> <br />
                                    <span>track_inventory_on_the_variant_level_stock: <a
                                            href="#">@{{this.product_item.track_inventory_on_the_variant_level_stock}}</a></span>
                                    <br />
                                    <span>track_inventory_on_the_variant_level_low_stock: <a
                                            href="#">@{{this.product_item.track_inventory_on_the_variant_level_low_stock}}</a></span>
                                    <br />
                                    <span>selected_variant_options: <a
                                            href="#">@{{this.product_item.selected_variant_option_json}}</a></span>
                                    <br />

                                    <span>modifier_options: <a
                                            href="#">@{{this.product_item.modifier_options_json}}</a></span> <br />
                                    <span>set_as_store_front: <a
                                            href="#">@{{this.product_item.set_as_store_front}}</a></span> <br />
                                    <span>search_keywords: <a href="#">@{{this.product_item.search_keywords}}</a></span>
                                    <br />
                                    <span>sort_order: <a href="#">@{{this.product_item.sort_order}}</a></span> <br />
                                    <span>template_layout_file: <a
                                            href="#">@{{this.product_item.template_layout_file}}</a></span> <br />
                                    <span>waranty_information: <a
                                            href="#">@{{this.product_item.waranty_information}}</a></span> <br />
                                    <span>availability_text: <a
                                            href="#">@{{this.product_item.availability_text}}</a></span> <br />
                                    <span>product_condition: <a
                                            href="#">@{{this.product_item.product_condition}}</a></span> <br />
                                    <span>show_condition_on_storefront: <a
                                            href="#">@{{this.product_item.show_condition_on_storefront}}</a></span>
                                    <br />
                                    <span>custom_fields:
                                        <div href="#" v-for="customfild in this.product_item.custom_fields_json">
                                            <a href="">@{{customfild.name}} || @{{customfild.value}} <br></a>
                                        </div>
                                    </span>
                                    <br />
                                    <span>automatically_show_related_prodauct_on_my_store_front: <a
                                            href="#">@{{this.product_item.automatically_show_related_prodauct_on_my_store_front}}</a></span>
                                    <br />
                                    <span>width: <a href="#">@{{this.product_item.width}}</a></span> <br />
                                    <span>height: <a href="#">@{{this.product_item.height}}</a></span> <br />
                                    <span>depth: <a href="#">@{{this.product_item.depth}}</a></span> <br />
                                    <span>fixed_shipping_price: <a
                                            href="#">@{{this.product_item.fixed_shipping_price}}</a></span> <br />
                                    <span>free_shipping: <a href="#">@{{this.product_item.free_shipping}}</a></span>
                                    <br />
                                    <span>purchasability: <a href="#">@{{this.product_item.purchasability}}</a></span>
                                    <br />
                                    <span>preorder_message: <a
                                            href="#">@{{this.product_item.preorder_message}}</a></span> <br />
                                    <span>release_date: <a href="#">@{{this.product_item.release_date}}</a></span>
                                    <br />
                                    <span>remove_pre_order_status_on_this_date: <a
                                            href="#">@{{this.product_item.remove_pre_order_status_on_this_date}}</a></span>
                                    <br />
                                    <span>show_call_for_pricing: <a
                                            href="#">@{{this.product_item.show_call_for_pricing}}</a></span> <br />
                                    <span>call_number: <a href="#">@{{this.product_item.call_number}}</a></span> <br />
                                    <span>minimum_purchase_quantity: <a
                                            href="#">@{{this.product_item.minimum_purchase_quantity}}</a></span> <br />
                                    <span>maximum_purchase_quantity: <a
                                            href="#">@{{this.product_item.maximum_purchase_quantity}}</a></span> <br />
                                    <span>wrapping: <a href="#">@{{this.product_item.wrapping}}</a></span> <br />
                                    <span>custom_information: <a
                                            href="#">@{{this.product_item.custom_information}}</a></span> <br />
                                    <span>country_of_origin: <a
                                            href="#">@{{this.product_item.country_of_origin}}</a></span> <br />
                                    <span>comodity_description: <a
                                            href="#">@{{this.product_item.comodity_description}}</a></span> <br />
                                    <span>hs_codes:
                                        <div v-for="hscode in this.product_item.hs_codes_json">

                                            <a href="#">Country: @{{hscode.country}} || Code: @{{hscode.code}} <br></a>
                                        </div>
                                        <div href="#" v-for="customfild in this.product_item.custom_fields_json">
                                            <a href="">@{{customfild.name}} || @{{customfild.value}} <br></a>
                                        </div>
                                    </span>
                                    <br />
                                    <span>page_title: <a href="#">@{{this.product_item.page_title}}</a></span> <br />
                                    <span>product_url: <a href="#">@{{this.product_item.product_url}}</a></span> <br />
                                    <span>meta_description: <a
                                            href="#">@{{this.product_item.meta_description}}</a></span>
                                    <br />
                                    <span>open_graph_sharing_object_type: <a
                                            href="#">@{{this.product_item.open_graph_sharing_object_type}}</a></span>
                                    <br />
                                    <span>open_graph_use_product_description: <a
                                            href="#">@{{this.product_item.open_graph_use_product_description}}</a></span>
                                    <br />
                                    <span>open_graph_use_product_name: <a
                                            href="#">@{{this.product_item.open_graph_use_product_name}}</a></span>
                                    <br />
                                    <span>variant_values: <a
                                            href="#">@{{this.product_item.variant_values_json}}</a></span>
                                    <br />
                                </div>


                            </form>
                            <div class="priduct_social">
                                <ul>
                                    <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                            Like</a></li>
                                    <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i>
                                            tweet</a></li>
                                    <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                            save</a></li>
                                    <li><a class="google-plus" href="#" title="google +"><i
                                                class="fa fa-google-plus"></i>
                                            share</a></li>
                                    <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                            linked</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--product details end-->

            <!--product info start-->
            <div class="product_d_info">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                            aria-selected="false">Description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                            aria-selected="false">Specification</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews (1)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla.</p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem,
                                            quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies
                                            massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                            hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus
                                            nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus,
                                            consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in
                                            imperdiet ligula euismod eget.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sheet" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand
                                            offers feminine designs delivering stylish separates and statement dresses
                                            which have since evolved into a full ready-to-wear collection in which every
                                            item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                            looks with youthful elegance and unmistakable signature style. All the
                                            beautiful pieces are made in Italy and manufactured with the greatest
                                            attention. Now Fashion extends to a range of accessories including shoes,
                                            hats, belts and more!</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="reviews_wrapper">
                                        <h2>1 review for Donec eu furniture</h2>
                                        <div class="reviews_comment_box">
                                            <div class="comment_thmb">
                                                <img src="{{ asset('contents/frontend') }}/assets/img/blog/comment2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p><strong>admin </strong>- September 12, 2018</p>
                                                    <span>roadthemes</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                        </div>
                                        <div class="product_rating mb-10">
                                            <h3>Your rating</h3>
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment" id="review_comment"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" type="text">
                                                    </div>
                                                </div>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--product info end-->
        </div>


    </div>
</div>
@endsection