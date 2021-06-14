@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Social Media</div>


                </div>
                <div class="breadcrumb-subtitle">
                    {{-- <p>Fill in the form below to specify the account details.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        {{-- <h6 class="mb-0 text-uppercase">Contact Informationm</h6> --}}
                        {{-- <hr> --}}
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Twitter</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Facebook</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Pinterest</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Instagram</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">LinkedIn</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">YouTube</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>
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

@endsection