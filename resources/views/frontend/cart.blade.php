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
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="cart_page_bg" id="cart_table">
    <div class="container">
        <div class="shopping_cart_area">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in get_selected_cart_all_product" :key="index">
                                            <td class="product_remove">
                                                <a href="#" @click.prevent="remove_product_from_cart(index)">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a href="#" @click.prevent="edit_cart_product(item)">
                                                    <i class="fa fa-pencil-square-o" title="Edit Product"></i>
                                                </a>
                                            </td>
                                            <td class="product_thumb">
                                                <a href="#">
                                                    <img src="{{ asset('contents/frontend') }}/assets/img/s-product/product.jpg"
                                                        alt="">
                                                </a>
                                            </td>
                                            <td class="product_name">
                                                <a href="#">@{{ item.product.product_name }}</a>
                                            </td>
                                            <td class="product-price">$@{{ item.product.default_price }}</td>
                                            <td class="product_quantity">
                                                <label>Quantity</label>
                                                <input min="1" max="100" :value="item.cart_option.qty"
                                                    @change="change_product_qty($event,item.product.id)" type="number">
                                            </td>
                                            <td class="product_total">
                                                $@{{ item.product.default_price *  item.cart_option.qty}}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">$ @{{get_sub_total}}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> $0</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">$ @{{get_sub_total}}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{route('frontend_checkout')}}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
</div>
{{--
@push('js')
<script src="{{ asset('contents/admin') }}/frontend_vue.js"></script>
@endpush --}}

@endsection