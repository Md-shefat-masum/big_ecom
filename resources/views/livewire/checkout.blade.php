

<div class="pt-2 section-space shop-checkout-area">
    <div class="container">
        <h2 class="py-5">Checkout</h2>
        <form class="checkout-content" id="checkout-form" onsubmit="checkout(event)" method="post">
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
                                    <input class="form-control" name="first_name" type="text" id="input-firstname" placeholder="First Name*" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-lastname">Last Name</label>
                                    <input type="text" id="input-lastname" name="last_name" class="form-control" placeholder="Last Name*" />
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="control-label" for="input-address">Address</label>
                                <input type="text" id="input-address" name="address" class="form-control" placeholder="Address*" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-telephone">Mobile</label>
                                <input type="tel" id="input-telephone" name="mobile_number" class="form-control" placeholder="Telephone*" />
                            </div>
                            <div class="form-group" for="input-email">
                                <label class="control-label">Email</label>
                                <input type="email" id="input-email" name="email" class="form-control" placeholder="E-Mail*" />
                            </div>
                            <div class="multiple-form-group">
                                <div class="form-group" for="input-city">
                                    <label class="control-label">City</label>
                                    <input type="text" id="input-city" name="city" class="form-control" placeholder="City*" />
                                </div>
                                <div class="form-group" for="input-zone">
                                    <label class="control-label">Zone</label>
                                    <select id="input-zone" name="zone" class="form-control">
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
                                <textarea class="form-control" name="comment" placeholder="Comment" rows="6"></textarea>
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
                                        <input type="radio" id="cod_btn" name="payment_method" value="cod" checked />
                                        Cash on Delivery
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" id="bkash_btn" name="payment_method" value="bkash" />
                                        Bkash
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" id="bank_transfer_btn" name="payment_method" value="bank" />
                                        Bank Transfer
                                    </label>
                                    <br />
                                    <div id="bkash_section" class="border border-1 rounded-1 my-2 p-2 d-none">
                                        <p class="mb-3">
                                            অনুগ্রহ করে আপনার বিকাশ ‘পেমেন্ট অপশন’ থেকে আপনার পেমেন্ট কমপ্লিট করুন। তারপর নিচের ফর্মটি ফিলাপ করুন। আমাদের বিকাশ একাউন্টে টাকা পাঠানোর নিয়মঃ
                                        </p>
                                        <ul class="mb-3">
                                            <li class="d-flex gap-2"><span>১।</span> <span>*247# ডায়াল করে বিকাশ মোবাইল মেন্যুতে যান</span></li>
                                            <li class="d-flex gap-2"><span>২।</span> <span>"Payment" অপশন সিলেক্ট করুন।</span></li>
                                            <li class="d-flex gap-2"><span>৩।</span> <span>Enter Merchant Bkash account এ : +8801315-373025 নাম্বারটি লিখুন</span></li>
                                            <li class="d-flex gap-2"><span>৪।</span> <span> Amount এ আপনার বিল এমাউন্টটি লিখুন।</span></li>
                                            <li class="d-flex gap-2"><span>৫।</span> <span>Enter Reference এ আপনার নামের প্রথম শব্দ লিখুন।</span></li>
                                            <li class="d-flex gap-2"><span>৬।</span> <span>Enter counter number এ 1 লিখুন।</span></li>
                                            <li class="d-flex gap-2"><span>৭।</span> <span>আপনার বিকাশ মোবাইল মেন্যু পিনটি দিয়ে লেনদেনটি সম্পন্ন করুন।</span></li>
                                            <li class="d-flex gap-2"><b>bKash Agent No : </b> <b>+8801315373025</b></li>
                                            <div class="form-group">
                                                <label class="control-label" for="input-firstname"><b>BKash Number: </b></label>
                                                <input class="form-control" name="bkash_number" type="text" id="bkash_number" placeholder="013******" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="input-firstname"><b>BKash transaction ID: </b></label>
                                                <input class="form-control" name="bkash_trx_id" type="text" id="bkash_trx" placeholder="TRX-4548" />
                                            </div>
                                        </ul>
                                    </div>

                                    <div id="bank_section" class="border border-1 rounded-1 my-2 p-2 d-none">
                                        <p class="mb-3">
                                            Please go to your personal bank or log into your online banking portal, and follow the guideline:
                                        </p>
                                        <ul class="mb-3">
                                            <li class="d-flex gap-2"><span>1।</span> <span>specify that you would like to send your funds to another bank account, 
                                                and provides the bank account details obtained when they submitted the order.</span></li>
                                            <li class="d-flex gap-2"><span>2।</span> <span>Send the funds and the bank transfer has been initiated.</span></li>
                                            <li class="d-flex gap-2"><span>3।</span> <span>The payment is complete when we payment reaches the receiving account.</span></li>
                                            <li class="d-flex gap-2"><span>4।</span> <span>Provide us the transaction ID</span></li>
                                            <div class="form-group">
                                                <label class="control-label" for="input-firstname"><b>Bank account no: </b></label>
                                                <input class="form-control" name="bank_account_no" type="text" id="bank_ac_no" placeholder="013******" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="input-firstname"><b>Transaction ID: </b></label>
                                                <input class="form-control" name="bank_transaction_id" type="text" id="bank_trx_no" placeholder="TRX-4548" />
                                            </div>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 delivery-methods">
                            <div class="card checkout-section">
                                <div class="section-head">
                                    <h2><span>3</span>Delivery Method</h2>
                                </div>
                                <div class="">
                                    <p>Select a delivery method</p>
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" wire:change="updateShipping({!! $value=60 !!})" value="home_delivery"/>
                                        Home Delivery - 60৳
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" checked wire:change="updateShipping({!! $value=0 !!})" value="pickup" />
                                        Store Pickup - 0৳
                                    </label>
                                    <br />
                                    <label class="radio-inline">
                                        <input type="radio" name="shipping_method" wire:change="updateShipping({!! $value=120 !!})" value="outside_dhaka" />
                                        Home Delivery outside Dhaka - 120৳
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
                                            @if ($carts)    
                                                @foreach ($carts as $cart)
                                                <tr>
                                                    <td class="name">
                                                        <a href="javascript:void(0)">{{ $cart['product']->product_name }}</a>
                                                        <div class="options"></div>
                                                    </td>
                                                    <td class="price"><span>{{ $cart['product']->default_price }}৳</span> <span> x </span> <span>{{ $cart['qty'] }}</span></td>
                                                    <td class="price text-right">{{ $cart['product']->default_price }}৳</td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Sub-Total:</strong></td>
                                                <input type="hidden" name="cart_total" value="{{ $cart_total }}" id="order_total">
                                                <td class="text-right"><span class="amount">{{ $cart_total }}৳</span></td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Delivery:</strong></td>
                                                <td class="text-right"><span class="amount">{{ $shipping_method }}৳</span></td>
                                            </tr>
                                            <tr class="total">
                                                <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                                <input type="hidden" name="order_total" value="{{ $order_total }}" id="order_total">
                                                <td class="text-right"><span class="amount">{{ $order_total }}</span></td>
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
                    <a href="/warranty-policy" target="_blank">
                        <b>Terms and Conditions</b>
                    </a>, 
                    <a href="/privacy" target="_blank">
                        <b>Privacy Policy</b>
                    </a> and
                    <a href="/refund-policy" target="_blank">
                        <b>Refund and Return Policy</b>
                    </a>
                </div>
                <button id="button-confirm"  class="btn submit-btn pull-right" type="submit">Confirm Order</button>
            </div>
        </form>
        
    </div>
</div>
