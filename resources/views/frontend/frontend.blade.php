<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Shopping Mall || New experience of buying and selling</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fab.png') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        function toaster(icon, message){
            Toast.fire({
                icon: icon,
                title: message,
            })
        }
    </script>

</head>

<body>

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="antomi_message">
                            <p>Get free shipping – Free 30 day money back guarantee</p>
                        </div>
                        <div class="header_top_settings text-right">
                            <ul>
                                <li><a href="#">Store Locations</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li>Hotline: <a href="tel:+(012)800456789">(012) 800 456 789 </a></li>
                                <li>Quality Guarantee Of Products</li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                                <li><a href="product-countdown.html">product countdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    <!--header area start-->
    <header>
        <div class="main_header header_seven">
            <div class="container">
                @include('include.flash')
                <!--header top start-->
                @include('frontend.include.header-top')
                <!--header top start-->

                <!--header middel start-->
                @include('frontend.include.header-middle')

                <!--header middel end-->



                <!--header bottom satrt-->
                @include('frontend.include.header-bottom')
                <!--header bottom end-->
            </div>
        </div>
    </header>
    <!--header area end-->


    {{-- <div class="modal fade" v-if="Object.keys(get_selected_product_for_quick_view).length > 0" id="quick_view_modal"
        tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6>view</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>@{{get_selected_product_for_quick_view.product_name}}</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span
                                        class="new_price">$@{{get_selected_product_for_quick_view.default_price}}</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum
                                        ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui
                                        nemo ipsum numquam, reiciendis maiores
                                        quidem aperiam, rerum vel recusandae
                                    </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="1" max="100" step="1" value="1" type="number" />
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="modal fade" id="cart_product_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div v-if="Object.keys(get_selected_product_for_cart).length > 0" class="modal-dialog modal-dialog-centered"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6>cart</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#">
                                                    <img src="{{ asset('contents/frontend') }}/assets/img/product/productbig2.jpg"
                                                        alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>@{{get_selected_product_for_cart.product_name}}</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$@{{get_selected_product_for_cart.default_price}}</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores
                                            quidem aperiam, rerum vel recusandae
                                        </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="">
                                                <input min="1" max="100" step="1" value="1" v-model="cart_option.qty"
                                                    type="number">
                                                <button type="button" @click.prevent="add_new_product_to_cart(
                                                        {
                                                            cart_option,
                                                            product: get_selected_product_for_cart
                                                        }
                                                    )">
                                                    add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include('frontend.include.banner') --}}

    <!--home section bg area start-->
    {{-- <div class="home_section_bg"> --}}
    @yield('content')
    </div>
    <!--home section bg area end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>Newsletter Sign Up</h3>
                                <p>(Get <span>30% OFF</span> coupon today subscibers)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>Join 226.000+ subscribers</strong> and get a new discount coupon on every
                                    Monday.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your email address..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>GET THE APP</h3>
                            <div class="aff_content">
                                <p><strong>Bandszone</strong> App is Coming Soon...
                                </p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img
                                            src="{{ asset('contents/frontend') }}/assets/img/icon/icon-appstore.png"
                                            alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img
                                            src="{{ asset('contents/frontend') }}/assets/img/icon/icon-googleplay.png"
                                            alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <div class="widgets_container contact_us">
                                <h3>Facebook Feed</h3>
                                <div class="aff_content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Service Page</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="https://web.facebook.com/brandszoneglobal/?_rdc=1&_rdr"
                                            target="_blank">Brandszone || Clothing</a></li>
                                    <li><a href="https://www.facebook.com/gohonagram" target="_blank">GohonaGram ||
                                            Jwellery</a></li>
                                    <li><a href="https://www.facebook.com/mackuplover" target="_blank">Mackuplover || Health and Beauty
                                            Care</a></li>
                                    <li><a href="https://www.facebook.com/laajim" target="_blank">Laajim || Mobile and Gadgets</a>
                                    </li>
                                    <li><a href="https://www.facebook.com/orikacorporation" target="_blank">Orikacorporation || Building
                                            Metarial</a></li>
                                    <li><a href="https://www.facebook.com/Brothersecorporation" target="_blank">Brothersecorporation || Renoable Energy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>CONTACT INFO</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="{{ asset('contents/frontend') }}/assets/img/icon/icon-phone.png"
                                            alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24/24: <br> <strong> +880 1760686162</strong></p>
                                    </div>
                                </div>
                                <p>218/3/A (3rd Floor) West kafrul, Begum Rokeya Sarani Ave, Shewrapara
                                    Dhaka 1216, Bangladesh.
                                    <br>
                                    support@brandszone.com.bd</p>
                            </div>

                            {{-- <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2014-21 <a href="#" target="_blank">Brandszone</a>
                                Develop By <a href="http://hsblco.com/" target="_blank">HSBLCO</a> Team</p>
                            {{-- <p>Copyright &copy; 202! <a href="http://hsblco.com/" target="_blank">HSBLCO</a> All Right Reserved.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="footer_payment text-right">
                            {{-- <img src="{{ asset('contents/frontend') }}/assets/img/icon/payment.png" alt=""> --}}
                            <div class="nov-row-wrap row">
                                <div class="nov-image col-12">
                                    <ul
                                        style="padding: 0; display: flex;justify-content: space-between;flex-wrap: wrap;">
                                        <li style="margin: 10px 0px !important;"><a href="">We
                                                Accept : </a></li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/1.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/2.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/3.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/4.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/5.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/6.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/7.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/8.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/9.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/10.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/11.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/12.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/13.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/14.png" alt="">
                                        </li>
                                        <li style="list-style-type:none"><img style="height: 40px;"
                                                src="{{ asset('contents/frontend') }}/assets/img/payment/15.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <script src="/js/app.js"></script>

    <script>
        $.ajaxSetup({
            cache:false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $( document ).ajaxSuccess((e,res)=>console.log((res.responseJSON && res.responseJSON) || res));
        $( document ).ajaxError(function( event, res ) {
            console.log(res.responseJSON.errors || res);
        });
    </script>
    <!-- Plugins JS -->
    <script src="{{ asset('contents/frontend') }}/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="{{ asset('contents/frontend') }}/assets/js/main.js"></script>
    <script src="{{ asset('contents/admin') }}/frontend_vue.js"></script>

    @stack('js')

</body>


</html>
