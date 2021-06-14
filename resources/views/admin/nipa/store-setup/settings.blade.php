@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Store Settings</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Update the settings in the form below and click "Save", or click "Cancel" to keep the current settings.</p>
                </div>
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Store Status</h6>
                        <hr />
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Down for Maintenance</label>
                                            </div>
                                        </div>
                                    


                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="mb-0 text-uppercase">Physical Dimension Settings</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="border p-4 rounded"> --}}

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Weight Measurement</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3"
                                            aria-label="Default select example">
                                            <option value="">........</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Length Measurement</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3"
                                            aria-label="Default select example">
                                            <option value="">........</option>
                                        </select>
                                        </div>
                                    </div>
                                 
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Decimal Token</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Thousands Token</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Decimal Places</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Factoring Dimension</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3"
                                            aria-label="Default select example">
                                            <option value="">...</option>
                                        </select>
                                        </div>
                                    </div>

                                {{-- </div> --}}
                            </div>
                        </div>
                        <h6 class="mb-0 text-uppercase">Search Engine Optimization</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="border p-4 rounded"> --}}

                              
                                 
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Home Page Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Meta Keywords</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Meta Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">WWW/No WWW Redirect</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3"
                                            aria-label="Default select example">
                                            <option value="">...</option>
                                        </select>
                                        </div>
                                    </div>

                                {{-- </div> --}}
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