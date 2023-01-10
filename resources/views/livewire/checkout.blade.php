

<div class="pt-2 section-space shop-checkout-area">
    <div class="container">
        <h2 class="py-5">Checkout</h2>
        <form class="checkout-content" id="checkout-form" action="https://www.startech.com.bd/checkout/onepagecheckout" method="post">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card checkout-section checkout-box h-100">
                        <div class="section-head">
                            <h2><span>1</span>Customer Information</h2>
                        </div>
                        <div class="address">
                            <div class="multiple-form-group">
                                <div class="form-group">
                                    <label class="control-label" for="input-firstname">First Name</label>
                                    <input class="form-control" name="firstname" type="text" id="input-firstname" value="" placeholder="First Name*" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-lastname">Last Name</label>
                                    <input type="text" id="input-lastname" name="lastname" value="" class="form-control" placeholder="Last Name*" />
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="control-label" for="input-address">Address</label>
                                <input type="text" id="input-address" name="address_1" value="" class="form-control" placeholder="Address*" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-telephone">Mobile</label>
                                <input type="tel" id="input-telephone" name="telephone" value="" class="form-control" placeholder="Telephone*" />
                            </div>
                            <div class="form-group" for="input-email">
                                <label class="control-label">Email</label>
                                <input type="email" id="input-email" name="email" value="" class="form-control" placeholder="E-Mail*" />
                            </div>
                            <div class="multiple-form-group">
                                <div class="form-group" for="input-city">
                                    <label class="control-label">City</label>
                                    <input type="text" id="input-city" name="city" value="" class="form-control" placeholder="City*" />
                                </div>
                                <div class="form-group" for="input-zone">
                                    <label class="control-label">Zone</label>
                                    <select name="zone_id" id="input-zone" class="form-control">
                                        <option value="322" selected=""> Dhaka City</option>
                                        <option value="323"> Khulna City</option>
                                        <option value="4231"> Rangpur City</option>
                                        <option value="321">Chittagong City</option>
                                        <option value="4233">Gazipur City</option>
                                        <option value="4232">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Comment</label>
                                <textarea class="form-control" name="comment" value="" placeholder="Comment" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="row row-payment-delivery-order">
                        <div class="col-md-6 col-sm-12 payment-methods">
                            <div class="card checkout-section checkout-box h-100">
                                <div class="section-head">
                                    <h2><span>2</span>Payment Method</h2>
                                </div>
                                <div class="">
                                    <p>Select a payment method</p>
                                    <label class="radio-inline">
                                        <input type="radio" name="payment_method" value="cod" checked="checked" />
                                        Cash on Delivery
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" name="payment_method" value="pod" />
                                        POS on Delivery
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" name="payment_method" value="online" />
                                        Online Payment
                                    </label>
                                    <br />
                                    <div class="accepted-logo">
                                        <h5>We Accept :</h5>
                                        <a href="#"><img class="logo logo-visa" src="{{ asset('contents/frontend/assets/images/card-logo.png') }}" /></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 delivery-methods">
                            <div class="card checkout-section checkout-box h-100">
                                <div class="section-head">
                                    <h2><span>3</span>Delivery Method</h2>
                                </div>
                                <div class="">
                                    <p>Select a delivery method</p>
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" value="flat.flat" checked="checked" />
                                        Home Delivery - 60৳
                                    </label>
                                    <br />
                                    <input type="hidden" name="flat.flat.title" value="Home Delivery" />
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" value="pickup.pickup" />
                                        Store Pickup - 0৳
                                    </label>
                                    <br />
                                    <input type="hidden" name="pickup.pickup.title" value="Store Pickup" />
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" value="express.express" />
                                        Request Express - Charge Applicable
                                    </label>
                                    <br />
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="checkout-section card checkout-box voucher-coupon mt-3 p-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12" id="gift-voucher">
                                            <div class="input-group">
                                                <input type="text" name="voucher" placeholder="Gift Voucher" id="input-voucher" class="form-control" />
                                                <span class="input-group-btn"><button type="button" id="button-voucher" data-loading-text="Loading..." class="btn st-outline">Apply Voucher</button></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12" id="discount-coupon">
                                            <div class="input-group">
                                                <input type="text" name="coupon" placeholder="Promo / Coupon Code" id="input-coupon" class="form-control" />
                                                <span class="input-group-btn"><button type="button" id="button-coupon" data-loading-text="Loading..." class="btn st-outline">Apply Coupon</button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 details-section-wrap">
                            <div class="card checkout-section checkout-box">
                                <div class="section-head">
                                    <h2><span>4</span>Order Overview</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered bg-white checkout-data">
                                        <thead>
                                            <tr>
                                                <td>Product Name</td>
                                                <td>Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="name">
                                                    <a href="https://www.startech.com.bd/amd-ryzen-5-5600x-processor">AMD Ryzen 5 5600X Processor</a>
                                                    <div class="options"></div>
                                                    <div class="fade">220</div>
                                                </td>
                                                <td class="price"><span>20,000৳</span> <span> x </span> <span>1</span></td>
                                                <td class="price text-right">20,000৳</td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Sub-Total:</strong></td>
                                                <td class="text-right"><span class="amount">20,000৳</span></td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Home Delivery:</strong></td>
                                                <td class="text-right"><span class="amount">60৳</span></td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                                <td class="text-right"><span class="amount">20,060৳</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="checkout-final-action mt-3">
                <div class="agree-text" style="margin-bottom: 10px;">
                    <input type="checkbox" name="agree" value="1" checked="checked" />
                    I have read and agree to the 
                    <a href="https://www.startech.com.bd/warranty-policy" target="_blank">
                        <b>Terms and Conditions</b>
                    </a>, 
                    <a href="https://www.startech.com.bd/privacy" target="_blank">
                        <b>Privacy Policy</b>
                    </a> and
                    <a href="https://www.startech.com.bd/refund-policy" target="_blank">
                        <b>Refund and Return Policy</b>
                    </a>
                </div>
                <button id="button-confirm" class="btn submit-btn pull-right" type="submit">Confirm Order</button>
            </div>
        </form>
        
    </div>
</div>
