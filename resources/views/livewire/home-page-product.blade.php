
<div class="product-area section-two-space">
    <div class="container custom-container">
        <h2 class="text-center mb-4 mt-n2 mb-10">Hot Products</h2>
        <div class="row">
            @foreach ($products as $product)
                @php
                    $product = (object) $product;           
                @endphp
                {{-- @livewire('product', ['product' => $product]) --}}
                @include('livewire.product',  [
                    'product' => $product,
                    'class' => "col-md-3"
                ])
                {{-- ('product', ['product' => $product]) --}}
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
        
