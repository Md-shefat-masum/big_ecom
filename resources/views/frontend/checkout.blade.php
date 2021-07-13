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
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="checkout_page_bg">
    <div class="container">
        <div class="Checkout_section">

            <div class="checkout_form">
                <div class="row" id="add-checkout">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_left">
                            <form id="form_body" method="POST" ref="anyName" enctype="multipart/form-data">
                                @csrf
                                <h3>Billing Details</h3>
                                <div class="row">

                                    <div class="col-lg-6 mb-20">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" name="first_name" v-model="get_billing_address.first_name">
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" name="last_name" v-model="get_billing_address.last_name">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="country">country <span>*</span></label>
                                        <select class="niceselect_option" name="cuntry" id="country">
                                            <option value="2">bangladesh</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">Afghanistan</option>
                                            <option value="5">Ghana</option>
                                            <option value="6">Albania</option>
                                            <option value="7">Bahrain</option>
                                            <option value="8">Colombia</option>
                                            <option value="9">Dominican Republic</option>

                                        </select>
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Street address <span>*</span></label>
                                        <input placeholder="House number and street name" type="text"
                                            name="street_address" v-model="get_billing_address.street_address">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>State / County <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone" v-model="get_billing_address.phone">

                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> Email Address <span>*</span></label>
                                        <input type="text" name="email" v-model="get_billing_address.email">

                                    </div>
                                    <div class="col-12 mb-20">
                                        <input id="account" type="checkbox" data-target="createp_account" />
                                        <label for="account" data-toggle="collapse" data-target="#collapseOne"
                                            aria-controls="collapseOne">Create an account?</label>

                                        <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <label> Account password <span>*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input id="address" type="checkbox" data-target="createp_account" />
                                        <label class="righ_0" for="address" data-toggle="collapse"
                                            data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different
                                            address?</label>

                                        <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-6 mb-20">
                                                    <label>First Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-lg-6 mb-20">
                                                    <label>Last Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Company Name</label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <div class="select_form_select">
                                                        <label for="countru_name">country <span>*</span></label>
                                                        <select class="niceselect_option" name="cuntry"
                                                            id="countru_name">
                                                            <option value="2">bangladesh</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">Afghanistan</option>
                                                            <option value="5">Ghana</option>
                                                            <option value="6">Albania</option>
                                                            <option value="7">Bahrain</option>
                                                            <option value="8">Colombia</option>
                                                            <option value="9">Dominican Republic</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 mb-20">
                                                    <label>Street address <span>*</span></label>
                                                    <input placeholder="House number and street name" type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <input placeholder="Apartment, suite, unit etc. (optional)"
                                                        type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Town / City <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>State / County <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                                <div class="col-lg-6 mb-20">
                                                    <label>Phone<span>*</span></label>
                                                    <input type="text">

                                                </div>
                                                <div class="col-lg-6">
                                                    <label> Email Address <span>*</span></label>
                                                    <input type="text">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="order-notes">
                                            <label for="order_note">Order Notes</label>
                                            <textarea id="order_note"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="order_button save_button primary_btn default_button">
                                            <button @click.prevent="checout_confirm" type="button"
                                                class="btn px-5 checkout_btn">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_right">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(item, index) in get_selected_cart_all_product" :key="index">
                                                <td> @{{ item.product.product_name }} <strong> ×
                                                        @{{ item.cart_option.qty}}</strong></td>
                                                <td> $ @{{ item.product.default_price *  item.cart_option.qty}}</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td>$ @{{get_sub_total}}</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td><strong>$ 0</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td><strong>$ @{{get_sub_total}}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="panel-default">
                                        <input id="payment" name="check_method" type="radio"
                                            data-target="createp_account" />
                                        <label for="payment" data-toggle="collapse" data-target="#method"
                                            aria-controls="method">Create an account?</label>

                                        <div id="method" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <input id="payment_defult" name="check_method" type="radio"
                                            data-target="createp_account" />
                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult"
                                            aria-controls="collapsedefult">PayPal <img
                                                src="{{ asset('contents/frontend') }}/assets/img/icon/papyel.png"
                                                alt=""></label>

                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order_button">
                                        <button type="submit">Proceed to PayPal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection