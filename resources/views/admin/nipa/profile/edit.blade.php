@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <h1></h1>
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">Edit Profile</h6>
                        <hr />
                        <p>Set up basic information about you</p>
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