@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
       
        <div class="page-wrapper">
            <div class="page-content">
            
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Add Customer</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Fill in the form below to specify the account details.</p>
                </div>
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Customer Details</h6>
                        <hr />
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Customer Group</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected=""> -- Do not assign to a customer group --</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Store Credit </label>
                                            <div class="input-group flex-nowrap"> <span class="input-group-text"
                                                    id="addon-wrapping">৳</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Receive ACS/Review Emails</label> <br>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Force Password Reset On Next Login </label> <br>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Tax Exempt Code</label>
                                            <input type="text" class="form-control">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="mb-0 text-uppercase">Customer Password</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control">
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