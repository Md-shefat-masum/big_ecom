
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
                        <a class="product-item-thumb" href="/product-details">
                            @if (count($product->related_images) > 0)
                                <img src="{{ $product->related_images[0]['image'] }}" width="233" height="245" alt="Image-HasTech">
                            @endif
                        </a>
                        <div class="product-item-action">
                            
                            <button type="button" onclick="showModal({{ $product->id }})" class="product-action-btn action-btn-quick-view">
                                <i class="icon-magnifier"></i>
                            </button>
                        </div>
                        <div class="product-bottom">
                            <div class="product-item-info text-center pb-6">
                                <h5 class="product-item-title mb-2"><a href="javascript:void(0)" wire:click="details({{ $product->id }})">{{ $product->product_name }}</a></h5>
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

    <div class="modal-backdrop fade show d-none"></div>
    @if($is_showModal == true)
        <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" id="closeModalbutton" onclick="closeModal()" class="btn-close"><span>×</span></button>
                            <div class="row row-gutter-0">
                                <div class="col-lg-6">
                                    <div class="single-product-slider">
                                        <div class="single-product-thumb">
                                            <div class="swiper single-product-quick-view-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="thumb-item">
                                                            <img src="{{ $view_product->related_images[0]['image'] }}" alt="Image" width="640" height="710">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-detail-content mt-6 mt-lg-0">
                                        <h2 class="product-detail-title mt-n1 me-10">{{ $view_product->product_name; }}</h2>
                                        <div class="product-detail-price">{{ $view_product->default_price }}</div>
                                        
                                        <p class="product-detail-desc">{!! \Illuminate\Support\Str::limit($view_product->description, 500, '...') !!}</p>
                                        <div class="mb-3">
                                            <button class="product-detail-cart-btn" wire:click="addToCart({!! $product->id !!})" type="button">Add to cart</button>
                                        </div>
                                        
                                        <ul class="product-detail-meta pt-6">
                                            <li><span>SKU:</span> WX-256HG</li>
                                            <li><span>Categories:</span> Home, Electronic</li>
                                            <li><span>Tag</span> Electronic</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        
        
    @endif
</div> 
        
