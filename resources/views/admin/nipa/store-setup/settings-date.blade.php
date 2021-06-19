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
                <div class="row" id="store_setup_settings_date">
                    <div class="col-xl-11 mx-auto">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-0 text-uppercase">Date Settings</h6>
                            <hr />

                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Your Timezone</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3" name="timezone"
                                                v-model="form_data.timezone"
                                                aria-label="Default select example">
                                                @php
                                                $store=DB::table('store_your_timezones')->get();
                                                @endphp
                                                @foreach ($store as $item)

                                                <option value="{{$item->id}}">{{$item->timezone_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enable DST Correction?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch"
                                                v-if="form_data.enable_dst_correction == 1">
                                                <input class="form-check-input" name="enable_dst_correction"
                                                    v-model="form_data.enable_dst_correction" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable daylight savings time correction</label>
                                            </div>
                                            <div class="form-check form-switch"
                                                v-if="form_data.enable_dst_correction == 0">
                                                <input class="form-check-input" name="enable_dst_correction" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable daylight savings time correction</label>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Display Date Format</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="display_date_format"
                                                v-model="form_data.display_date_format" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Extended Display Date Format</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="extended_display_date_format"
                                                v-model="form_data.extended_display_date_format" class="form-control">
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