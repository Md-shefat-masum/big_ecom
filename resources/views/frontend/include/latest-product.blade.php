<div class="home_section_bg">
<div class="product_area deals_product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title s_title_style3">
                        <h2>Our Campeings</h2>

                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav">
                            <li>
                                <a class="active" data-toggle="tab" href="#Fashion" role="tab" aria-controls="Fashion"
                                    aria-selected="true">
                                    Fashion & Clothing
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Games" role="tab" aria-controls="Games"
                                    aria-selected="false">
                                    Games & Consoles
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Speaker" role="tab" aria-controls="Speaker"
                                    aria-selected="false">
                                    Headphone & Speaker
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile"
                                    aria-selected="false">
                                    Mobile & Tablets
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            @php
                $offers = App\Models\ProductOffer::where('type','campeing')
                                            ->where('status',1)->where('end_date','>',Carbon\Carbon::today())
                                            ->select(['name','id','slug','total','image','discount','subtotal','start_date','end_date'])
                                            ->orderBy('id','DESC')->limit(6)->get();
            @endphp
            @foreach ($offers as $item)
                <div class="col-md-2">
                    <article class="single_product">
                        <div class="product_thumb">
                            <a class="primary_img" href="product-countdown.html">
                                <img src="/{{ $item->image }}" alt="{{ $item->image }}">
                            </a>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist">
                                        <a href="#" title="Add to Wishlist">
                                            <i class="ion-android-favorite-outline"></i>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="#" title="Add to Compare">
                                            <i class="ion-ios-settings-strong"></i>
                                        </a>
                                    </li>
                                    <li class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                            <i class="ion-ios-search-strong"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_content_inner">
                                <h4 class="product_name">
                                    <a href="#">{{ $item->name }}</a>
                                </h4>
                                <div class="price_box">
                                    <span class="old_price">{{ $item->subtotal }}</span>
                                    <span class="current_price">{{ $item->total }}</span>
                                </div>
                                <div class="countdown_text">
                                    <p><span>Hurry Up!</span> Campeings ends in: </p>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="{{ Carbon\Carbon::parse($item->end_date)->format('Y/m/d') }}"></div>
                                </div>
                            </div>
                            <div class="add_to_cart">
                                <a href="#" title="Add to cart">Add to cart</a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>

    </div>
</div>
