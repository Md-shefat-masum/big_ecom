<div class="product-detail-area section-space">
    @if (isset($product))
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-detail-thumb me-lg-6">
                        <div class="swiper single-product-thumb-slider">
                            <div class="swiper-wrapper">
                                <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="assets/images/shop/details/1.jpg">
                                    <img src="/{{ $product->related_images[0]['image'] }}" width="640" height="530" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-detail-content">
                        <h2 class="product-detail-title mt-n1 me-10">{{ $product->product_name }}</h2>
                        @if ($product->discounts)
                            <div class="product-detail-price">{{ $product->default_price-$product->discounts['discount_amount'] }} ৳ - <span class="price-old">{{ $product->default_price }} ৳</span></div>
                        @else
                            <div class="product-detail-price">{{ $product->default_price }}</div>
                        @endif

                        <div class="product-detail-review"> 

                            @if ($product->reviews->avg('star') > 0)
                                <div class="product-detail-review-icon">
                                    @for ($i = 0; $i < floor($product->reviews->avg('star')); $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for ($j = $i; $j < 5; $j++)
                                        @if ($j == $i && fmod($product->reviews->avg('star'), $i))
                                            <i class="fa fa-star-half-o"></i>
                                        @else
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="product-detail-review-show"> {{ $product->reviews->avg('star') }} ( {{ $product->reviews->count() }} Review )</p>
                            @endif
                            
                            
                        </div>
                        <p class="product-detail-desc">
                            @if ($product->total_description)
                                {!! $product->total_description['key_fetures'] !!}
                            @else
                                {!! $product->description !!}
                            @endif
                        </p>
                        
                        <div class="mb-3">
                            <div class="pro-qty">
                                <input type="text" title="Quantity" value="01">
                            </div>
                            <button wire:click="addToCart({!! $product->id !!})" class="product-detail-cart-btn" type="button">Add to cart</button>
                        </div>
                        <!--== Start Features Area Wrapper ==-->
                        <div class="features-two-area">
                            <div class="row mb-n3">
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ asset('contents/frontend') }}/assets/images/icons/1.png" width="44" height="38" alt="Icon"> <span class="feature-two-title">Support 24/7</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ asset('contents/frontend') }}/assets/images/icons/3.png" width="48" height="38" alt="Icon"> <span class="feature-two-title">Card Payment</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ asset('contents/frontend') }}/assets/images/icons/4.png" width="50" height="38" alt="Icon"> <span class="feature-two-title">Free Shipping</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                            </div>
                        </div>
                        <!--== End Features Area Wrapper ==-->
                        <ul class="product-detail-meta">
                            <li><b>Share: </b></li>
                            <a class="product-detail-cart-btn p-2" target="_blank" href="https://www.facebook.com/sharer.php?u={{ url()->full() }}"><i class="fa fa-facebook"></i></a></a>
                            <a class="product-detail-cart-btn p-2" target="_blank" href="https://twitter.com/intent/tweet?url={{ url()->full() }}"><i class="fa fa-twitter"></i></a></a>
                            
                            {{-- <li><span>SKU:</span> WX-256HG</li> --}}
                            <li class="mt-5">
                                <span>Categories:</span>
                                @foreach ($product->related_categories as $item)
                                    {{ $item->name }}, 
                                @endforeach
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--== Start Product Detail Tab Area Wrapper ==-->
            <div class="nav product-detail-nav" id="product-detail-nav-tab" role="tablist">
                <a href="#description" class="product-detail-nav-link active"  aria-controls="description" aria-selected="true">Description</a>
                <a href="#review" class="product-detail-nav-link" id="review-tab" aria-controls="review" aria-selected="false">Review</a>
            </div>
            <div class="tab-content" id="product-detail-nav-tabContent">
                <div class="tab-pane fade show active" id="description">
                    <h2 class="my-4">Description</h2>
                    <p class="product-detail-nav-description">
                        @if ($product->total_description)
                            {!! $product->total_description['main_description'] !!}
                        @else
                            {!! $product->description !!}
                        @endif
                    </p>
                </div>

                {{-- <div class="tab-pane" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                    <ul class="product-detail-info-wrap">
                        <li><span>Weight :</span> 250 g</li>
                        <li><span>Dimensions :</span>10 x 10 x 15 cm</li>
                        <li><span>Materials :</span> 60% cotton, 40% polyester</li>
                        <li><span>Other Info :</span> American heirloom jean shorts pug seitan letterpress</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius velit corporis quo voluptate culpa soluta, esse accusamus, sunt quia omnis amet temporibus sapiente harum quam itaque libero tempore. Ipsum, ducimus. lorem</p>
                </div> --}}

                <div class="tab-pane" id="review">
                    
                    <button type="button" id="login_modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        login/register
                    </button>
                    

                    <div class="card border-light mt-5">
                        <div class="card-body">
                            <h2 class="my-4">Reviews</h2>
                            
                            <div class="card border-light mb-4">
                                <div class="card-body">
                                    <form id="review-form" onsubmit="reviewSubmit(event)" method="post">
                                        <div class="form-group">
                                            <label for="">your rating</label>
                                            <input type="hidden" name="rating" id="rating">
                                            <input type="hidden" value="{{ $product->id }}" name="product_id" id="product_id">
                                            <ul class="d-flex gap-1">
                                                <li><i data-serial="1" class="review_star fa fa-star"></i></li>
                                                <li><i data-serial="2" class="review_star fa fa-star"></i></li>
                                                <li><i data-serial="3" class="review_star fa fa-star"></i></li>
                                                <li><i data-serial="4" class="review_star fa fa-star"></i></li>
                                                <li><i data-serial="5" class="review_star fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                        <label for="reviewInput">your review</label>
                                        <textarea type="text" name="review_description" id="review_description" class="form-control" id="reviewInput" aria-describedby="reviewInputHelp"></textarea>
                                        </div>
                                        <button type="submit" class="my-3 btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>   
                            
                            @livewire('reviews', ['product_id' => $product->id])

                            {{-- <div class="product-review-item">
                                <div class="product-review-top">
                                    <div class="product-review-thumb">
                                        <img src="{{ asset('contents/frontend') }}/assets/images/shop/details/c1.png" alt="Images">
                                    </div>
                                    <div class="product-review-content">
                                        <h4 class="product-review-name">Tomas Doe</h4>
                                        <h5 class="product-review-designation">Delveloper</h5>
                                        <div class="product-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra amet, sodales faucibus nibh. Vivamus amet potenti ultricies nunc gravida duis. Nascetur scelerisque massa sodales egestas augue neque euismod scelerisque viverra.</p>
                                <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                            </div> --}}

                        </div>
                    </div>
                    
                </div>
            </div>
            <!--== End Product Detail Tab Area Wrapper ==-->
        </div>
        <script>
            var elements = document.getElementsByClassName("review_star");
            var selected_star = 0;
            for(var i = 0; i < elements.length; i++){
                elements[i].addEventListener("mouseover", function () {
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.color = "gray"; 
                    }
                    selected_star = this.dataset.serial;
                    for (let index = 0; index < selected_star; index++) {
                        elements[index].style.color = 'orange';
                    }
                    document.getElementById('rating').value = selected_star;
                });   
            }
            
            // });
        </script>
    @endif
    
</div>


