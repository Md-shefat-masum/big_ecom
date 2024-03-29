<div class="category_product_wrapper">
    
    <div class="product-area section-space">
        <div class="container">
            <div class="child_list">
                @foreach ($sub_categories as $item)
                    @php
                        $data = [
                            "id" => $item->id,
                            "category_name" => str_replace(' ', '-', strtolower($item->name))
                        ];
                    @endphp
                    <a href="{{ route('category_product', $data) }}">{{ $item->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9 order-0 order-lg-1">
                    <!--== Start Product Top Bar Area Wrapper ==-->
                    <div class="shop-top-bar">
                        {{-- <div class="nav nav-tabs shop-filter-nav active" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab" data-bs-target="#column-three" type="button" role="tab" aria-controls="column-three" aria-selected="true"><i class="icon-grid icons"></i></button>
                            <button class="nav-link mr-0" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="icon-list icons"></i></button>
                        </div> --}}
                        {{-- <select class="select-shoing">
                            <option data-display="Default Sorting">Default Sorting</option>
                            <option value="1">Featured</option>
                            <option value="2">Best Selling</option>
                            <option value="3">Price: low to high</option>
                            <option value="4">Price: high to low</option>
                        </select> --}}
                        <div class="product-showing-count">
                            Showing <span>{{ ($all_products->currentpage()-1)*$all_products->perpage()+1}} to {{$all_products->currentpage()*$all_products->perpage() }}</span> of <span>{{ $all_products->total() }}</span> results
                        </div>
                        
                        {{-- <nav class="pagination-area ms-md-auto mt-3 mt-md-0">
                            <ul class="page-numbers">
                                <li>
                                    <a class="page-number active" href="shop.html">1</a>
                                </li>
                                <li>
                                    <a class="page-number" href="shop.html">2</a>
                                </li>
                                <li>
                                    <a class="page-number next" href="shop.html">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                    <!--== End Product Top Bar Area Wrapper ==-->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="column-three" role="tabpanel" aria-labelledby="column-three-tab">
                            <div class="row mb-n6">
                                @foreach ($all_products as $product)    
                                    @include('livewire.product',  [
                                        'product' => $product,
                                        'class' => "col-sm-6 col-lg-6 col-xl-4 mb-6"
                                    ])
                                @endforeach
                                
                                <div class="col-12">
                                    {{-- <nav class="pagination-area mt-6 mb-6">
                                        <ul class="page-numbers justify-content-center">
                                            <li>
                                                <a class="page-number active" href="shop.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="shop.html">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav> --}}
                                    {{-- @dump($all_products->links()) --}}
                                    {!! $links !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 order-1 order-lg-0">
                    <!--== Start Sidebar Area Wrapper ==-->
                    <div class="sidebar-area mt-10 mt-lg-0">
    
                        <div class="widget-item widget-item-one" style="height: 420px; overflow-x: auto;">
                            <h3 class="widget-two-title text-black">Product Filter</h3>
                            <div class="widget-filter-size">
                                <h4 class="filter-size-title">Filter By Brand</h4>
                                
                                <div class="filter-form-check">
                                    <input class="filter-form-check-input" type="checkbox" id="filterSizeChecked1">
                                    <label class="filter-form-check-label" for="filterSizeChecked1">All</label>
                                </div>
                                @foreach ($brands as $item)    
                                    <div class="filter-form-check">
                                        <input class="filter-form-check-input" wire:model="brand_ids" wire:click.debounce.500ms="filterBrand()" value="{{ $item->id }}" name="brand_checkbox" type="checkbox" id="filterBrandcheck">
                                        <label class="filter-form-check-label" for="filterBrandcheck">{{ $item->name }}</label>
                                    </div>
                                    
                                @endforeach
                                </div>
                            </div>
                            <div class="widget-price-filter pe-0">
                                <h4 class="filter-price-title">Filter By Price</h4>
                                <div class="slider-range" id="slider-range"></div>
                                <div class="slider-labels">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <form wire:submit.prevent="PriceFilter(Object.fromEntries(new FormData($event.target)))">
                                                    <div class="col-6">
                                                        <label for="filter_from mb-2"><b>min</b></label>
                                                        <input type="number" wire:model="min_price" class="form-control" name="min_price" id="filter_from">
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <label for="filter_to mb-2"><b>max</b></label>
                                                        <input type="number" wire:model="max_price" class="form-control" name="max_price" id="filter_to">
                                                    </div>
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary">filter</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                            {{-- <div class="caption">
                                                <span id="slider-range-value1"></span>
                                            </div>
                                            <span> - </span>
                                            <div class="caption">
                                                <span id="slider-range-value2"></span>
                                            </div> --}}
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @if ($this->is_showModal == true)     --}}
        <!--== Start Product Quick View Modal ==-->
        
                
            
        <!--== End Product Quick View Modal ==-->
    {{-- @endif --}}
</div>

