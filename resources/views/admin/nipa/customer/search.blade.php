@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Search Customers</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Search for specific customers using the advanced search
                        options below.</p>
                </div>
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Advanced Search (optional)</h6>
                        <hr />
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Search Keywords</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Starts With the Letter</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Country</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected=""> -- Choose a Country --</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">State/Province</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6 class="mb-0 text-uppercase">Search by Range (optional)</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">

                                            <label for="inputFirstName" class="form-label">Customer ID</label> <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">From</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">to</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">

                                            <label for="inputFirstName" class="form-label">Number of Orders</label> <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">From</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">to</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">

                                            <label for="inputFirstName" class="form-label">Store Credit</label> <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-default">From ৳</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="inputGroup-sizing-default">to
                                                            ৳</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                        <h6 class="mb-0 text-uppercase">Search by Date (optional)</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Date Joined</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected=""> -- Choose a Registration Date --</option>
                                            </select>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                        <h6 class="mb-0 text-uppercase">Search by Group (optional)</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3 from-group">
                                            <label class="form-label">Customer Group</label> <br>
                                            <select class="form-control col-md-12 mb-3">
                                                <option selected=""> -- Choose a Customer Group --</option>
                                            </select>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>

                        <h6 class="mb-0 text-uppercase">Sort Order (optional)</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">


                                            <div class="row">
                                                <div class="col-md-6 from-group">
                                                    <label class="form-label">Customer</label> <br>
                                                    <select class="form-control col-md-12 mb-3"
                                                        aria-label="Default select example">
                                                        <option selected=""> -- ID --</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 from-group">
                                                    <label class="form-label">In</label> <br>
                                                    <select class="form-control col-md-12 mb-3"
                                                        aria-label="Default select example">
                                                        <option selected=""> -- Ascending Order --</option>
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