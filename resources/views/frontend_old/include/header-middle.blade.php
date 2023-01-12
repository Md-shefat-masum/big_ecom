<div class="header_middle sticky-header">
    <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-4">
            <div class="logo">
                <a href="/"><img src="{{ asset('contents/frontend') }}/assets/img/logo/logo.png" alt=""></a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="main_menu menu_position text-center">
                <nav>
                    <ul>
                        <li><a class="{{request()->is('/') ? "active" : "" }}" href="/">home</a>
                        </li>

                        {{-- <li><a href="about.html">About Us</a></li> --}}
                        {{-- <li><a class="{{request()->is('product') ? 'active' : ''}}"
                                href="{{route('frontend_product')}}">Product</a></li> --}}
                        <li><a class="{{request()->is('cart') ? 'active' : ''}}"
                                href="{{route('frontend_cart')}}">Cart</a></li>
                        {{-- <li><a class="{{request()->is('wishlist') ? 'active' : ''}}"
                                href="{{route('frontend_wishlist')}}">Wishlist</a></li> --}}
                        <li><a class="{{request()->is('contact') ? 'active' : ''}}"
                                href="{{route('frontend_contact')}}">Contact Us</a></li>
                        <li><a class="{{request()->is('checkout') ? 'active' : ''}}"
                                href="{{route('frontend_checkout')}}">Checkout</a></li>
                        <li><a class="{{request()->is('account') ? 'active' : ''}}"
                                href="{{route('frontend_account')}}">Account</a></li>
                        @if(Auth::user())
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();" class="logout-text">logout</a>
                            </form>
                        </li>
                        @else
                        <li><a class="{{request()->is('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-3 col-md-7 col-6">
            <div class="header_configure_area">
                {{-- <div class="header_wishlist">
                    <a href="{{route('frontend_wishlist')}}"><i class="ion-android-favorite-outline"></i>
                        <span class="wishlist_count">3</span>
                    </a>
                </div> --}}
                <div class="mini_cart_wrapper">
                    <a href="javascript:void(0)">
                        <span id="mini_cart_two">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="cart_price">$ @{{get_sub_total}} <i class="ion-ios-arrow-down"></i></span>
                            <span class="cart_count">@{{get_selected_cart_all_product.length}}</span>
                            {{-- <div id="mini_cart"> --}}
                            {{-- <span class="cart_count">{{get_selected_cart_all_product.length}}</span> --}}
                        {{-- </div> --}}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mini_cart">
    <div class="cart_close">
        <div class="cart_text">
            <h3>cart</h3>
        </div>
        <div class="mini_cart_close">
            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
        </div>
    </div>
    <div id="mini_cart">
        <div class="cart_item" v-for="(item, index) in get_selected_cart_all_product" :key="index">
            <div class="cart_img">
                <a href="#"><img src="{{ asset('contents/frontend') }}/assets/img/s-product/product.jpg" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">@{{ item.product.product_name }}</a>
                <p>Qty: @{{ item.cart_option.qty }} X <span> $@{{ item.product.default_price }} </span></p>
            </div>
            <div class="cart_remove">
                <a href="#" @click.prevent="remove_product_from_cart(index)"><i class="ion-android-close"></i></a>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_total">
                <span>Sub total:</span>
                <span class="price">$ @{{get_sub_total}}</span>
            </div>
            <div class="cart_total mt-10">
                <span>total:</span>
                <span class="price">$ @{{get_sub_total}}</span>
            </div>
        </div>
    </div>
    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="{{route('frontend_cart')}}">View cart</a>
        </div>
        <div class="cart_button">
            <a class="active" href="{{route('frontend_checkout')}}">Checkout</a>
        </div>

    </div>
</div>
