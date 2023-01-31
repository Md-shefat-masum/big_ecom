<div class="{{ isset($class)? $class : "col-md-3" }} mb-4">
    @if (isset($product))    
    @php
        $data = [
            "id" => $product->id,
            "product_name" => str_replace(' ', '-', strtolower($product->product_name))
        ];
    @endphp
    
    <div class="product-item product-item-border custom-product-item">
        <a class="product-item-thumb" href="{{ route('product_details', $data) }}">
            @if (count($product->related_images) > 0)
                <img src="/{{ $product->related_images[0]['image'] }}" width="228" height="228" alt="Image-Ctgcomputer">
            @endif
        </a>
        @if ($product->discounts)
            <span class="badges">-{{ $product->discounts['discount_percent'] }}%</span>
        @endif
        <div class="product-item-action">
            
            <button type="button" type="button" onclick="showQuickView({{ $product->id }})" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal" class="product-action-btn action-btn-quick-view">
                <i class="icon-magnifier"></i>
            </button>
        </div>
        <div class="product-bottom">
            <div class="product-item-info text-center pb-6">
                <h5 class="product-item-title mb-2"><a href="{{ route('product_details', $data) }}">{{ $product->product_name }}</a></h5>
                {{-- <div class="product-item-price mb-0">{{ $product->default_price }}<span class="price-old">{{ $product->default_price }}</span></div> --}}
            </div>
            <div class="d-flex justify-content-between">
                <div class="ms-4 product-item-price mb-4">
                    @if ($product->discounts)
                        <div class="product-item-price">{{ $product->default_price-$product->discounts['discount_amount'] }} ৳  -<span class="price-old">{{ $product->default_price }} ৳</span></div>
                    @else
                    {{ $product->default_price }} ৳
                    @endif
                </div>
                <button type="button" wire:click="addToCart({!! $product->id !!})" class="info-btn-cart me-4 mb-4"><i class="icon-handbag"></i></button>
            </div>
        </div>
    </div>
    
    @endif
</div>
