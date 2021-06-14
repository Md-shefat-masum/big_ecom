@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" id="">
            {{-- @include('admin.layouts.includes.bread_cumb',['title'=>'View Products']) --}}

            <h5>Search Product</h5>
            <p>
                Search for specific products using the advanced search options below.
            </p>

            <div class="card">
                <div class="card-header">
                    <h5>Advanced Search</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="d-block text-md-right">Search Keywords:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Starts With the Letter:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">--Any Letter--</option>
                                <option value="">0-9</option>
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Brand Name:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">--All Brand Names--</option>
                                <option value="">Common</option>
                                <option value="">OFS</option>
                                <option value="">SagaForm</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Categories:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">--All Cateories--</option>
                                <option value="">Shop All</option>
                                <option value="">Bath</option>
                                <option value="">Garden</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Search by Range</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="d-block text-md-right"> Price Range:</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">From</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                            <label for="">To</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="d-block text-md-right"> Quantity Sold:</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">From</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                            <label for="">To</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="d-block text-md-right">Inventory Level:</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">From</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                            <label for="">To</label>
                            <input type="text" class="form-control" style="width: 100px;display: inline-block;">
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Search by Setting</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Product Visibility:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">No preference</option>
                                <option value="">only visible</option>
                                <option value="">only invisible</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Free Shipping:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">No preference</option>
                                <option value="">only visible</option>
                                <option value="">only invisible</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for=""  class="d-block text-md-right">Status:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control">
                                <option value="">No preference</option>
                                <option value="">only visible</option>
                                <option value="">only invisible</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>Sort Order</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="d-block text-md-right"> Sort Order:</label>
                        </div>
                        <div class="col-md-4">
                            <select name="" class="form-control" style="width: 150px;display: inline-block;">
                                <option value="">Id</option>
                                <option value="">Sku</option>
                                <option value="">In stock</option>
                                <option value="">Product Name</option>
                                <option value="">Price</option>
                                <option value="">Visible</option>
                            </select>
                            <label for="">in</label>
                            <select name="" class="form-control" style="width: 150px;display: inline-block;">
                                <option value="">Ascending</option>
                                <option value="">Descending</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
    @endpush
@endsection

