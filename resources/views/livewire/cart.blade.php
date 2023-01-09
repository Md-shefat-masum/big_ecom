<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="product-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table-wrap">
                        <div class="table-responsive">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Product</th>
                                        <th class="width-price"> Price</th>
                                        <th class="width-quantity">Quantity</th>
                                        <th class="width-subtotal">Subtotal</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="shop-single-product.html"><img class="w-100" src="{{ asset('contents/frontend') }}/assets/images/shop/w1.png" alt="Image" width="96" height="96"></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="shop-single-product.html">{{ $cart['product']->product_name }}</a></h5>
                                        </td>
                                        <td class="product-price"><span class="amount">{{ $cart['product']->default_price }}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-details-quality">
                                                <div class="pro-qty">
                                                    <div wire:click="decrease({{ $cart['product']['id'] }})" class= "dec qty-btn">-</div>
                                                    <input type="text" title="Quantity" value="{{ $cart['qty'] }}">
                                                    <div wire:click="increase({{ $cart['product']['id'] }})" class="inc qty-btn">+</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>{{ $cart['product']->default_price }}</span></td>
                                        <td class="product-remove"><a href="#/"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cart-shiping-update-wrapper">
                        <div class="cart-shiping-btn continure-btn">
                            <a class="btn btn-link" href="shop.html"><i class="fa fa-angle-left"></i> Back To Shop</a>
                        </div>
                        <div class="cart-shiping-btn update-btn">
                            <a class="btn btn-link" href="shop.html"><i class="fa fa-repeat"></i> Back To Shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Calculate shipping </h4>
                        <div class="calculate-discount-content">
                            <div class="select-style">
                                <select class="select-active">
                                    <option>Bangladesh</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="select-style">
                                <select class="select-active">
                                    <option>State / County</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="input-style">
                                <input type="text" placeholder="Town / City">
                            </div>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Postcode / ZIP">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40 mt-10 mt-md-0">
                        <h4>Coupon Discount </h4>
                        <div class="calculate-discount-content">
                            <p>Enter your coupon code if you have one.</p>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Coupon code">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Apply Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="grand-total-wrap mt-10 mt-lg-0">
                        <div class="grand-total-content">
                            <h5>Subtotal <span>$180.00</span></h5>
                            <div class="grand-shipping">
                                <span>Shipping</span>
                                <ul>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                </ul>
                            </div>
                            <div class="shipping-country">
                                <p>Shipping to Bangladesh</p>
                            </div>
                            <div class="grand-total">
                                <h4>Total <span>$185.00</span></h4>
                            </div>
                        </div>
                        <div class="grand-total-btn">
                            <a class="btn btn-link" href="shop-checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
