<!--== Start Product Filter Area Wrapper ==-->
<div class="product-area section-two-space">
    <div class="container custom-container">
        <h2 class="text-center mb-4 mt-n2">Hot Products</h2>
        <div class="masonry-filter-menu text-center mb-8">
            <button class="active" data-filter="*">All</button>
            <button data-filter=".filterAudio">Audio/Video</button>
            <button data-filter=".filterGamming">Gamming</button>
            <button data-filter=".filterHeadphone">Headphone</button>
            <button data-filter=".filterDigitalCamera">Digital Camera</button>
        </div>

        <div class="row">
            {{-- @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="product-item product-item-border mb-4">
                        <a class="product-item-thumb" href="shop-single-product.html">
                            <img src="{{ asset('contents/frontend') }}/assets/images/shop/t2.png" width="233" height="245" alt="Image-HasTech">
                        </a>
                        <div class="product-item-action">
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                <i class="icon-heart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                <i class="icon-shuffle"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="icon-magnifier"></i>
                            </button>
                        </div>
                        <div class="product-item-info text-center pb-6">
                            <h5 class="product-item-title mb-2"><a href="shop-single-product.html">Speaker Sonic New Adi -25</a></h5>
                            <div class="product-item-price mb-0">$160.00 - <span class="price-old">$260.00</span></div>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            
        </div>
    </div>
</div>
<!--== End Product Filter Area Wrapper ==-->