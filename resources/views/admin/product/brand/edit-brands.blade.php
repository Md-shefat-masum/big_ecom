@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" id="product_brand">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Create Product Options'])

            <div class="card">
                <div class="card-header">
                    <ul class="filter_nav d-flex flex-wrap">
                        <li>
                            <a href="{{ route('admin_product_brands') }}" class="custom_white_btn">
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
                    <form action="{{ route('admin_product_update_brands') }}" id="create_option_form" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Brand</h4>
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
                                            <label for="">Brand Name</label>
                                            <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                                            @error('name')
                                                <span class="d-block text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-secondary">Submit</button>
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

