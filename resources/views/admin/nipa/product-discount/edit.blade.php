@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Update Product Discount Type</div>


                </div>

                <div class="row">
                    <div class="col-xl-11 mx-auto" id="product_discount_type">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- <input type="hidden" name="id" value="{{$data->id}}"> --}}


                            <hr />
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title"></h5>
                                    <a href="{{ route('product_discount_type') }}"
                                        class="btn btn-warning waves-effect waves-light m-1">
                                        <i class="fa fa-arrow-left"></i> <span>Back</span>
                                    </a>
                                </div>
                                <div class="card-body">


                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Discount Type
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" v-model="form_data.discount_type_name" name="discount_type_name"
                                                class="form-control">
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <button @click.prevent="store" type="button"
                                            class="btn btn-light px-5">Add</button>
                                    </div>
                                </div>
                            </div>

                        </form>

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
<script src="{{ asset('contents/admin') }}/product_new_vue.js"></script>

@endpush
@endsection