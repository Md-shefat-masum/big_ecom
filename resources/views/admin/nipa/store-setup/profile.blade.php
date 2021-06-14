@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Store Profile</div>


                </div>
                <div class="breadcrumb-subtitle">
                    {{-- <p>Fill in the form below to specify the account details.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Contact Informationm</h6>
                        <hr>
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">
                                <div class="border p-4 rounded">

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">EStore
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputEnterYourName">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputAddress4" class="col-sm-3 col-form-label">Store Address</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inputAddress4" rows="3"></textarea>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6>Example</h6>
                                            <p>
                                                Acme Widgets
                                                123 Widget Street
                                                Acmeville, AC 12345
                                                United States of America</p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Store Country</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3"
                                            aria-label="Default select example">
                                            <option value="">Bangladesh</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email
                                            Address</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmailAddress2"
                                                placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">This address is a</label>
                                        <div class="col-sm-9">
                                  
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
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