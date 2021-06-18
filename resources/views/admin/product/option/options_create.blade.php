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
                    <form action="#" id="create_option_form" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"
                                            style="display: flex;
                                                flex-direction: column;
                                                justify-content: space-between;
                                                height: 89%;"
                                        >
                                            <label for="">Display Name</label>
                                            <p>Visible to customers on storefront</p>
                                            <input type="text" name="display_name" v-model="display_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Variant Option Name</label>
                                            <p>Unique identifier for managing options, not visible to customers</p>
                                            <input type="text" name="variant_option_name" v-model="variant_option_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select name="type" v-model="type" class="form-control" id="">
                                                <option selected value="dropdown">Dropdown</option>
                                                <option value="radio">Radio</option>
                                                <option value="swatch">Swatch</option>
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
                                    <div class="col-4 text-right option_default_label">Default</div>
                                </div>
                                <hr>
                                <ul id="sortable">
                                    <li class="my-4" v-for="(item, index) in option_values" :key="index">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <i class="fa fa-braille"></i>
                                            <div style="flex:1; margin:0px 20px;display:flex;">
                                                <input type="text" name="options_name[]" class="custom_form_control" >
                                                <select name="" id="">
                                                    <option value="one_color">One Color</option>
                                                    <option value="two_color">Two Color</option>
                                                    <option value="three_color">Three Color</option>
                                                </select>
                                                <ul>
                                                    <li>
                                                        <input type="color">
                                                        <input type="text">
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="radio">
                                            <i @click.prevent="remove_option(index)" class="fa fa-trash-o btn btn-outline-danger ml-3"></i>
                                        </div>
                                        <hr>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" @click.prevent="add_option" class="btn btn-outline-warning">
                                            <i class="fa fa-plus"></i>
                                            Add Value
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button @click.prevent="create_option" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
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

