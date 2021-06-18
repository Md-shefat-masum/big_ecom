@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_option">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Create Product Options'])

            <div class="card">
                <div class="card-header">
                    <ul class="filter_nav d-flex flex-wrap">
                        <li>
                            <a href="{{ route('admin_product_create_category') }}" class="custom_white_btn">
                                <i class="fa fa-angle-left"></i>
                                Back
                            </a>
                        </li>
                        {{-- <li><a href="#" class="custom_white_btn">Delete</a></li>
                        <li>
                            <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                        </li>
                        <li>
                            <button class="custom_white_btn">Filter</button>
                        </li> --}}
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h2>Basic Information</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"
                                        style="display: flex;
                                        flex-direction: column;
                                        /* align-content: center; */
                                        justify-content: space-between;
                                        height: 89%;"
                                    >
                                        <label for="">Display Name</label>
                                        <p>Visible to customers on storefront</p>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Variant Option Name</label>
                                        <p>Unique identifier for managing options, not visible to customers</p>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="" class="form-control" id="">
                                            <option value="">Dropdown</option>
                                            <option value="">Radio</option>
                                            <option value="">Swatch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Product options</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">Display Label</div>
                                <div class="col-4 text-right">Default</div>
                            </div>
                            <hr>
                            <ul id="sortable">
                                <li class="my-4" v-for="item in 10" :key="item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <i class="fa fa-braille"></i>
                                        <input type="text" class="custom_form_control" style="flex:1; margin:0px 20px;">
                                        <input type="radio">
                                        <i class="fa fa-trash-o btn btn-outline-danger ml-3"></i>
                                    </div>
                                    <hr>
                                </li>
                            </ul>
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
        <script src="{{ asset('contents/admin') }}/plugins/sortable.js"></script>
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
    @endpush
@endsection

