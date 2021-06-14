@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Import Customers</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>You can import customers to your store from a CSV file on your
                        computer. We recommend that you make a backup of your customers before running a new import.</p>
                </div>
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Import Details</h6>
                        <hr />
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Bulk Edit Re-Import?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Yes, I exported this file using the 'Bulk Edit' template </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Override Existing Details?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Yes, override existing records</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="mb-0 text-uppercase">File Details</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Import File</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Upload a .csv file from my computer (512MB size limit) </label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                  
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Use a file already on the server</label>
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Field Separator</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Field Enclosure </label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </form>
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