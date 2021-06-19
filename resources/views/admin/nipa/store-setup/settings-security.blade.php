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
                <div class="row" id="store_setup_settings_security">
                    <div class="col-xl-11 mx-auto">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-0 text-uppercase">Security</h6>
                            <hr />

                            <div class="card">
                                <div class="card-body">

                                  
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Configure complexity of the shoppers password?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.configure_complexity == 0">
                                                <input class="form-check-input" name="configure_complexity"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, I would like to enforce complexity rules for shopper passwords</label>

                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.configure_complexity == 1">
                                                <input class="form-check-input" name="configure_complexity"
                                                    v-model="form_data.configure_complexity" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, I would like to enforce complexity rules for shopper passwords</label>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Inactive shopper logout</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="inactive_shopper_logout"
                                                    v-model="form_data.inactive_shopper_logout" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Use the default 7 day duration</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="inactive_shopper_logout"
                                                    v-model="form_data.inactive_shopper_logout" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Let me customize the duration</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Shopper activity extends logout duration</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="shopper_activity"
                                                    v-model="form_data.shopper_activity" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Disabled</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="shopper_activity"
                                                    v-model="form_data.shopper_activity" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Use the default 5 minute extension</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="shopper_activity"
                                                    v-model="form_data.shopper_activity" type="radio" value="3">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Let me customize the duration</label>
                                            </div>
                                        </div>
                                    </div>
                                  
                               


                                </div>
                            </div>
                       
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Control Panel Inactivity Timeout</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3" name="control_panel_inactivity"
                                                v-model="form_data.control_panel_inactivity"
                                                aria-label="Default select example">
                                                {{-- @php
                                                $sorts=DB::table('store_default_product_sorts')->get();
                                                @endphp
                                                @foreach ($sorts as $item)

                                                <option value="{{$item->id}}">{{$item->default_product_sort_name}}
                                                </option>
                                                @endforeach --}}
                                                <option value="1">12 hours</option>
                                                <option value="2">2 hours</option>
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Enable reCAPTCHA on storefront?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.enable_recaptcha_on_storefront == 1">
                                                <input class="form-check-input" name="enable_recaptcha_on_storefront" v-model="form_data.enable_recaptcha_on_storefront"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable reCAPTCHA security</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.enable_recaptcha_on_storefront == 0">
                                                <input class="form-check-input" name="enable_recaptcha_on_storefront" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable reCAPTCHA security</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">reCAPTCHA Site Key:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="recaptcha_site_key"
                                            v-model="form_data.recaptcha_site_key" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">reCAPTCHA Secret Key:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="recaptcha_secret_key"
                                            v-model="form_data.recaptcha_secret_key" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Failed Login Lockout</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="failed_login_lockout"
                                            v-model="form_data.failed_login_lockout" class="form-control">
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Cookie consent tracking</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.cookie_consent_tracking == 1">
                                                <input class="form-check-input" name="cookie_consent_tracking" v-model="form_data.cookie_consent_tracking"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, turn on the cookie consent banner on my store.</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.cookie_consent_tracking == 0">
                                                <input class="form-check-input" name="cookie_consent_tracking" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, turn on the cookie consent banner on my store.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Privacy Policy URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="privacy_policy_url"
                                            v-model="form_data.privacy_policy_url" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Analytics for my business</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch" v-if="form_data.analytics_for_my_business == 1">
                                                <input class="form-check-input" name="analytics_for_my_business" v-model="form_data.analytics_for_my_business"
                                                    type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">When on, we track your customers' behaviors so you can get analytics features to help you run your business. When this is off we do not track your customers behavior, your analytics reports will not work, and this data will NOT be recoverable. Please consult your legal advisors to determine the appropriate setting for your business.</label>
                                            </div>
                                            <div class="form-check form-switch" v-if="form_data.analytics_for_my_business == 0">
                                                <input class="form-check-input" name="analytics_for_my_business" type="checkbox">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">When on, we track your customers' behaviors so you can get analytics features to help you run your business. When this is off we do not track your customers behavior, your analytics reports will not work, and this data will NOT be recoverable. Please consult your legal advisors to determine the appropriate setting for your business.</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Configure Content-Security-Policy Header Value</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="content_security_policy"
                                                    v-model="form_data.content_security_policy" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Do not use a custom CSP header</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="content_security_policy"
                                                    v-model="form_data.content_security_policy" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Specify my own CSP header</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">X-Frame-Options header</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="x_frame_options_header"
                                                    v-model="form_data.x_frame_options_header" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Deny</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="x_frame_options_header"
                                                    v-model="form_data.x_frame_options_header" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Same Origin</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="x_frame_options_header"
                                                    v-model="form_data.x_frame_options_header" type="radio" value="3">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Allow from url</label>
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