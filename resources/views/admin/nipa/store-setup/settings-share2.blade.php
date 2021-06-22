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
                    <p>Update the settings in the form below and click "Save", or click "Cancel" to keep the current
                        settings.</p>
                </div>
                <div class="row" id="store_setup_settings_share">
                    <div class="col-xl-11 mx-auto">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-0 text-uppercase">Social Sharing Settings</h6>
                            <hr />

                   
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Facebook</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.facebook == 1">
                                                <input class="form-check-input" name="facebook" v-model="form_data.facebook"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.facebook == 0">
                                                <input class="form-check-input" name="facebook" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Twitter</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.twitter == 1">
                                                <input class="form-check-input" name="twitter" v-model="form_data.twitter"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.twitter == 0">
                                                <input class="form-check-input" name="twitter" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Instagram</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.instagram == 1">
                                                <input class="form-check-input" name="instagram" v-model="form_data.instagram"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.instagram == 0">
                                                <input class="form-check-input" name="instagram" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Linkedin</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.linkedin == 1">
                                                <input class="form-check-input" name="linkedin" v-model="form_data.linkedin"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.linkedin == 0">
                                                <input class="form-check-input" name="linkedin" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Pinterest</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.pinterest == 1">
                                                <input class="form-check-input" name="pinterest" v-model="form_data.pinterest"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.pinterest == 0">
                                                <input class="form-check-input" name="pinterest" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Like</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.like == 1">
                                                <input class="form-check-input" name="like" v-model="form_data.like"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.like == 0">
                                                <input class="form-check-input" name="like" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.email == 1">
                                                <input class="form-check-input" name="email" v-model="form_data.email"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.email == 0">
                                                <input class="form-check-input" name="email" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">NO</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                      
                          
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <button @click.prevent="store" type="button"
                                            class="btn btn-light px-5">Submit</button>
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
@push('cjs')
<script src="{{ asset('contents/admin') }}/store_setting_vue.js"></script>

@endpush
@endsection