@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Payment Method</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Please enter a valid billing address before editing your payment method.</p>
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Edit Contact</h6>
                        <hr>
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Address 2 (optional)</label>
                                            <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Country</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected="">Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3 from-group">
                                            <label class="form-label">State / province</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected="">....</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Zip code / postcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Timezone</label> <br>
                                            <select class="form-control col-md-12 mb-3"
                                                aria-label="Default select example">
                                                <option value="">.......</option>
                                            </select>
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