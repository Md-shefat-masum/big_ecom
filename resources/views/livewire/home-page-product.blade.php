
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
            @foreach ($products as $product)
            @php
                $product = (object) $product;
            @endphp
                <div class="col-md-3 mb-4">
                    <div class="product-item product-item-border custom-product-item">
                        <a class="product-item-thumb" href="shop-single-product.html">
                            @if (count($product->related_images) > 0)
                                <img src="{{ $product->related_images[0]['image'] }}" width="233" height="245" alt="Image-HasTech">
                            @endif
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
                        <div class="product-bottom">
                            <div class="product-item-info text-center pb-6">
                                <h5 class="product-item-title mb-2"><a href="shop-single-product.html">{{ $product->product_name }}</a></h5>
                                {{-- <div class="product-item-price mb-0">{{ $product->default_price }}<span class="price-old">{{ $product->default_price }}</span></div> --}}
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="ms-4 product-item-price mb-4">{{ $product->default_price }}</div>
                                <button type="button" wire:click="addToCart({!! $product->id !!})" class="info-btn-cart me-4 mb-4"><i class="icon-handbag"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            <div class="col-12">
                <div class="text-center">
                    <div wire:click="nextPage" type="button" class="btn btn-primary">Load more</div>
                </div>
            </div>
            
        </div>
    </div>
</div> 

