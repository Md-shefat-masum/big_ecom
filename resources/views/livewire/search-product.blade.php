<div class="product-area section-two-space">
    <div class="container custom-container">
        <h2 class="text-center mb-4 mt-n2 mb-10">Search results</h2>
        <div class="row">
            @foreach ($products as $product)
            @php
                $product = (object) $product;
            @endphp
                <div class="col-md-3 col-sm-6 col-lg-3 mb-4">
                    <div class="product-item product-item-border custom-product-item">
                        <a class="product-item-thumb" href="{{ route('product_details', $product->id) }}">
                            @if (count($product->related_images) > 0)
                                <img src="/{{ $product->related_images[0]['image'] }}" width="233" height="245" alt="Image-Ctgcomputer">
                            @endif
                        </a>
                        <div class="product-item-action">
                            
                            <button type="button" onclick="showModal({{ $product->id }})" class="product-action-btn action-btn-quick-view">
                                <i class="icon-magnifier"></i>
                            </button>
                        </div>
                        <div class="product-bottom">
                            <div class="product-item-info text-center pb-6">
                                <h5 class="product-item-title mb-2"><a href="{{ route('product_details', $product->id) }}">{{ $product->product_name }}</a></h5>
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
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div> 
