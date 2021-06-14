@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Logo Options</div>


                </div>
                <div class="breadcrumb-subtitle">
                    {{-- <p>Fill in the form below to specify the account details.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Logo</h6>
                        <hr>
                  
                        <form>
                            <div class="card">
                                <div class="card-body">

                                    <h6 class="mb-3">Select your logo type</h6>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Enter text to display as your logo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Upload a custom image to use as your logo</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="formFile" class="form-label">Select an image from your computer</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Font size</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Font Color</label>
                                            <input type="color" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" class="form-control">
                                        </div>
                                       

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

@endsection