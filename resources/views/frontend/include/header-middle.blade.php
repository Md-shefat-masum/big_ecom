<div class="header_middle sticky-header">
    <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-4">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('contents/frontend') }}/assets/img/logo/logo.png" alt=""></a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="main_menu menu_position text-center">
                <nav>
                    <ul>
                        <li><a class="{{request()->is('/') ? "active" : "" }}" href="/">home</a>
                        </li>

                        {{-- <li><a href="about.html">About Us</a></li> --}}
                        <li><a class="{{request()->is('frontend-product') ? 'active' : ''}}" href="{{route('frontend_product')}}">Product</a></li>
                        <li><a class="{{request()->is('frontend-cart') ? 'active' : ''}}" href="{{route('frontend_cart')}}">Cart</a></li>
                        <li><a class="{{request()->is('frontend-wishlist') ? 'active' : ''}}" href="{{route('frontend_wishlist')}}">Wishlist</a></li>
                        <li><a class="{{request()->is('frontend-contact') ? 'active' : ''}}" href="{{route('frontend_contact')}}">Contact Us</a></li>
                        @if(Auth::user())
                        <li><a class="{{request()->is('frontend-account') ? 'active' : ''}}" href="{{route('frontend_account')}}">Account</a></li>
                        @else
                        <li><a class="{{request()->is('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-3 col-md-7 col-6">
            <div class="header_configure_area">
                <div class="header_wishlist">
                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>
                        <span class="wishlist_count">3</span>
                    </a>
                </div>
                <div class="mini_cart_wrapper">
                    <a href="cart.html">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="cart_price">$152.00</span>
                        <span class="cart_count">2</span>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>