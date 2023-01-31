<div>
    <div class="product-area section-two-space">
        <div class="container custom-container">
            <h2 class="text-center mb-4 mt-n2 mb-10">Products with discounts</h2>
            <div class="row">
    
                @foreach ($products as $product)
                @include('livewire.product',  [
                    'product' => $product,
                    'class' => "col-md-3 col-sm-6 col-lg-3 mb-4"
                ])
                @endforeach
    
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
</div>
