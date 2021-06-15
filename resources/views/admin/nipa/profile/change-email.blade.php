@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
       
        <div class="page-wrapper">
            <div class="page-content">
            
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Change Email Address</div>
                </div>
                <div class="breadcrumb-subtitle">
                    <p>Change the email address that you use to log in to BigCommerce.</p>
                </div>

                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        {{-- <h6 class="mb-0 text-uppercase">Customer Details</h6> --}}
                        <hr />
                        <form method="post" action="{{route('admin_profile_update_email')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="role_id" value="{{$data->role_id}}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Current Email Address</label>
                                            <input type="email" class="form-control" value="{{$data->email}}">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">New Email Address</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Verify Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-light px-5">Update</button>
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