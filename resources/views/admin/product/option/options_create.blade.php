@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" id="product_option">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Create Product Options'])

            <div class="card">
                <div class="card-header">
                    <ul class="filter_nav d-flex flex-wrap">
                        <li>
                            <a href="{{ route('admin_product_option') }}" class="custom_white_btn">
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
                                            <input type="text" name="unique_name" v-model="variant_option_name" class="form-control variant_option_name">
                                            <span v-if="unique_name_check == 1" class="d-block variant_option_name_alert text-danger">name should be unique</span>
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
                                            <i class="fa fa-braille align-self-start mt-2"></i>
                                            <div class="product_option_rows">
                                                <input type="text" name="item.name[]" v-model="item.name" class="custom_form_control option_name align-self-start" >
                                                <div class="right_part" v-if="type=='swatch'">
                                                    <select name="color_limit" v-model="item.color_limit" class="select_colors">
                                                        <option value="3">One Color</option>
                                                        <option value="2">Two Color</option>
                                                        <option value="1">Three Color</option>
                                                    </select>
                                                    <ul class="color_swatch">
                                                        <li v-if="item.color_limit <= parseInt(1)">
                                                            <input type="color" v-model="item.colors.one_color">
                                                            <input type="text" v-model="item.colors.one_color" disabled class="custom_form_control">
                                                        </li>
                                                        <li v-if="item.color_limit <= parseInt(2)">
                                                            <input type="color" v-model="item.colors.two_color">
                                                            <input type="text" v-model="item.colors.two_color" disabled class="custom_form_control">
                                                        </li>
                                                        <li v-if="item.color_limit <= parseInt(3)">
                                                            <input type="color" v-model="item.colors.three_color">
                                                            <input type="text" v-model="item.colors.three_color" disabled class="custom_form_control">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <input type="radio" :value="index" name="item.default" name="default">
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
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
    @endpush
@endsection

