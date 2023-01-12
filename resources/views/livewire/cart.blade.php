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
                                    @if ($cart)    
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
                                                        <input type="text" title="Quantity" wire:keyup.debounce.500ms="quantityChange($event.target.value, {{ $cart['product']['id'] }})" value="{{ $cart['qty'] }}">
                                                        <div wire:click="increase({{ $cart['product']['id'] }})" class="inc qty-btn">+</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-total">
                                                @if ($cart['product']->default_price == "Call for Price" || $cart['product']->default_price == "Out of Stock")
                                                    <span>
                                                        {{ 0 * $cart['qty'] }}
                                                    </span>
                                                @else
                                                    <span>
                                                        {{ $cart['product']->default_price * $cart['qty'] }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="product-remove"><a href="javascript:void(0)" wire:click="remove({{ $cart['product']['id'] }})"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endif
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            
                        </div>
                          
                        <div class="row justify-content-end">
                            <div class="col-md-12 col-lg-4">
                                <div class="grand-total-wrap mt-10 mt-lg-4">
                                    <div class="grand-total-content">
                                        <h5>Subtotal 
                                            {{ $cart_total }}
                                        </h5>
                                        
                                        <div class="grand-total">
                                            <h4 class="mt-2">Total 
                                                {{ $cart_total }}
                                            </h4>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="cart-shiping-update-wrapper d-flex">
                        <div class="justify-content-between cart-shiping-btn continure-btn">
                            <a class="btn btn-link" href="/"><i class="fa fa-angle-left"></i> Back To Shop</a>
                        </div>
                        <div class="justify-content-between cart-shiping-btn continure-btn">
                            @if ((int)$cart_amount > 0)
                                <a class="btn btn-link" href="/checkout"></i> Proceed to checkout</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
            
        </div>
    </div>
</div>
