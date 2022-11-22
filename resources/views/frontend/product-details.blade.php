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
                                    <div v-html="this.product_item.description"></div>
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
            <div class="product_d_info" id="product-details-two">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    {{-- <li>
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                            aria-selected="false">Product Description</a>
                                    </li> --}}
                                    <li>
                                        <a class="active" data-toggle="tab" href="#sheet" role="tab"
                                            aria-controls="sheet" aria-selected="false">Product Specification</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#Pricing" role="tab" aria-controls="Pricing"
                                            aria-selected="false">Product Pricing</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#ProductOptions" role="tab"
                                            aria-controls="ProductOptions" aria-selected="false">Product Options</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                {{-- <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>@{{this.product_item.description}}</p>
                            </div>
                        </div> --}}
                        <div class="tab-pane fade show active" id="sheet" role="tabpanel">
                            <div class="product_d_table">
                                <form action="#">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="first_child">Product SKU</td>
                                                <td>@{{this.product_item.sku}}</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Product Type</td>
                                                <td>@{{this.product_item.product_type}}</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Brand</td>
                                                <td>
                                                    @{{this.product_item.brand_id}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Weight</td>
                                                <td>
                                                    @{{this.product_item.weight}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Category</td>
                                                <td>
                                                    <div v-for="pcatname in this.product_item.category_json">
                                                        <div href="#" v-for="category in categories">
                                                            <a v-if="category.id == pcatname">@{{category.name}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>
                                <div class="text-center"
                                    style="padding: 20px 0px 15px 0px; color: #c40316; text-transform: uppercase;">
                                    <h4 style="font-size: 18px;">Inventory</h4>
                                </div>
                                <form action="#">
                                    <div class="form-group col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Inventory</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex align-items-center mb-3">
                                                        <input @change="track_inventory = !track_inventory"
                                                            name="track_inventory" id="track_inventory"
                                                            class="form-control d-inline-block mr-2" style="width: 30px"
                                                            type="checkbox">
                                                        <label for="track_inventory"
                                                            style="line-height: 30px;margin: 0;">Track
                                                            Inventory</label>
                                                    </div>
                                                    <div class="col-12" v-if="track_inventory">
                                                        <ul class="pl-5">
                                                            <li class="d-flex align-items-center mb-2">
                                                                <input
                                                                    @change="on_the_product_level = !on_the_product_level"
                                                                    type="radio" name="on_the_product_level"
                                                                    class="form-control mr-2" style="width: 30px">
                                                                <label style="line-height: 30px;margin: 0;" for=""> On
                                                                    the product level</label>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-2">
                                                                <input
                                                                    @change="on_the_product_level = !on_the_product_level"
                                                                    type="radio" name="on_the_product_level"
                                                                    class="form-control mr-2" style="width: 30px">
                                                                <label style="line-height: 30px;margin: 0;" for=""> On
                                                                    the variant level</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row" v-if="on_the_product_level">

                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="first_child">Stock</td>
                                                                <td>@{{this.product_item.track_inventory_on_the_variant_level_stock}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">Low Stock</td>
                                                                <td>@{{this.product_item.track_inventory_on_the_variant_level_low_stock}}
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row" v-else>
                                                    <div class="col-12">
                                                        <span>Add variant options to create variants and manage
                                                            inventory</span>
                                                        <a href="#" class="text-info"
                                                            style="text-decoration: none;">below</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="text-center"
                                    style="padding: 20px 0px 15px 0px; color: #c40316; text-transform: uppercase;">
                                    <h4 style="font-size: 18px;">Product Description</h4>
                                </div>
                            </div>
                            <div class="product_info_content">
                                {{-- <p>@{{this.product_item.description}}</p> --}}
                                <div v-html="this.product_item.description"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Pricing" role="tabpanel">
                            <div class="product_d_table">
                                {{-- <div class="text-center" style="padding: 10px 0px 0px 0px;">
                                            <h4>Bulk Pricing</h4>
                                        </div> --}}
                                <form action="#">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="first_child">DEFAULT PRICE * (EXCLUDING TAX)</td>
                                                <td>
                                                    @{{this.product_item.pricing_default_price}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">TAX CLASS</td>
                                                <td>
                                                    <select name="tax_class" class="form-control">
                                                        <option value="default_tax_class"> Default Tax Class
                                                        </option>
                                                        <option value="non_taxable_products"> Non-Taxable
                                                            Products</option>
                                                        <option value="shipping"> Shipping</option>
                                                        <option value="gift_wrapping"> Gift Wrapping</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">COST</td>
                                                <td>
                                                    @{{this.product_item.cost}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">MSRP</td>
                                                <td>
                                                    @{{this.product_item.msrp}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">SALE PRICE</td>
                                                <td>
                                                    @{{this.product_item.sales_price}}
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </form>
                                <div class="text-center"
                                    style="padding: 20px 0px 15px 0px; color: #c40316; text-transform: uppercase;">
                                    <h4 style="font-size: 18px;">Bulk Pricing</h4>
                                </div>
                                <form action="#"
                                    v-for="bulk_pricing in this.product_item.bulk_pricing_discount_options_json">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="first_child">DISCOUNT TYPE</td>
                                                <td>
                                                    <select name="bulk_pricing_discount_type" class="form-control">
                                                        <option value="discount"> % Discount</option>
                                                        <option value="fixed_amount"> $ Fixed Amount</option>
                                                        <option value="off_unit"> $ Off/Unit</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first_child">MIN QUANTITY</td>
                                                <td>
                                                    @{{bulk_pricing.min_quantity}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">DISCOUNT</td>
                                                <td>
                                                    @{{bulk_pricing.discount}}%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">UNIT PRICE</td>
                                                <td>
                                                    @{{bulk_pricing.unit_price}}
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </form>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="ProductOptions" role="tabpanel">
                            <div class="product_d_table">
                                <div class="text-center"
                                    style="padding: 20px 0px 15px 0px; color: #c40316; text-transform: uppercase;">
                                    <h4 style="font-size: 18px;">Fulfillment</h4>
                                </div>

                                <form action="#">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="first_child">Width</td>
                                                <td>
                                                    @{{this.product_item.width}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Height</td>
                                                <td>
                                                    @{{this.product_item.height}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Depth</td>
                                                <td>
                                                    @{{this.product_item.depth}}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>
                                <div class="text-center"
                                    style="padding: 20px 0px 15px 0px; color: #c40316; text-transform: uppercase;">
                                    <h4 style="font-size: 18px;">Purchasability</h4>
                                </div>
                                <form action="#">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="first_child">MINIMUM PURCHASE QUANTITY</td>
                                                <td>
                                                    @{{this.product_item.minimum_purchase_quantity}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">
                                                    MAXIMUM PURCHASE QUANTITY</td>
                                                <td>
                                                    @{{this.product_item.maximum_purchase_quantity}}
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="first_child">
                                                    Wrapping</td>
                                                <td>
                                                    @{{this.product_item.wrapping}}
                                            </td>
                                            </tr> --}}


                                        </tbody>
                                    </table>
                                    {{-- <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="col-12 d-flex align-items-center mb-3">
                                                        <input id="purchasability" @change="purchasability='can_be_purchased_in_online_store'" name="purchasability" checked type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                        <label for="purchasability" style="line-height: 30px; margin: 0px;">This product can be purchased in my online store</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-12 d-flex align-items-center mb-3">
                                                        <input id="purchasability2" @change="purchasability='comming_soon'" name="purchasability" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                        <label for="purchasability2" style="line-height: 30px; margin: 0px;">This product is coming soon but I want to take pre-orders</label>
                                                    </div>
                                                </div>
                                                <div class="row pl-5 mb-5" v-if="purchasability == 'comming_soon'">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Message</label>
                                                            <input type="text" class="form-control" v-model="preorder_message" name="preorder_message" value="Expected release date is %%DATE%%">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="">Release Date</label>
                                                            <input type="date" v-model="release_date" name="release_date" class="form-control" placeholder="D MMM YYYY">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="align-self: center;margin-top: 24px;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input  name="remove_pre_order_status_on_this_date" v-model="remove_pre_order_status_on_this_date" type="checkbox" class="form-control d-inline-block mr-2" style="width: 42px;">
                                                            <label for="remove_pre_order_status_on_this_date" style="line-height: 16px; margin: 0px;">Remove pre-order status on this date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-12 d-flex align-items-center mb-3">
                                                        <input id="purchasability3" @change="purchasability='can_not_be_purchased_in_online_store'" name="purchasability" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                        <label for="purchasability3" style="line-height: 30px; margin: 0px;">This product cannot be purchased in my online store</label>
                                                    </div>
                                                </div>
                                                <div class="row pl-5 mb-5" v-if="purchasability == 'can_not_be_purchased_in_online_store'">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <input  name="show_call_for_pricing" type="checkbox" v-model="show_call_for_pricing" class="form-control d-inline-block mr-2" style="width: 26px;">
                                                                <label for="show_call_for_pricing" style="line-height: 16px; margin: 0px;">Show “Call for pricing” message instead of the price</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="call_number">Call for pricing label</label>
                                                            <input type="text" class="form-control" v-model="call_number" name="call_number" value="Contact us at 555-5555">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                </form>
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
