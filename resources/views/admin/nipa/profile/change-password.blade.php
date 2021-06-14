@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
       
        <div class="page-wrapper">
            <div class="page-content">
            
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Change Password</div>
                </div>
                <div class="breadcrumb-subtitle">
                    <p>Change the password you use to login to BigCommerce.</p>
                </div>

                <div class="row">
                    <div class="col-xl-11 mx-auto">

                        <h6 class="mb-0 text-uppercase">New Password</h6>
                           <p>Choose a strong password and don't reuse it for other accounts.</p>
                        <hr />
                        <form method="post" action="{{route('admin_profile_update_password')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="hidden" name="role_id" value="{{$data->role_id}}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                      
                                        <div class="col-md-8 mb-3">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-8 mb-3">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password2" class="form-control">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Your password must contain:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">At least 8 characters</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">One or more uppercase letters</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">One or more punctuation marks or symbols</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">One or more lowercase letters</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">One or more numbers</label>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-light px-5">Change</button>
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