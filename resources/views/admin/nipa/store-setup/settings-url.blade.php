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
                <div class="row" id="store_setup_settings_url">
                    <div class="col-xl-11 mx-auto">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf
                       

                            <h6 class="mb-0 text-uppercase">Product URL Settings</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Product URL Settings</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="product_url_settings"
                                                    v-model="form_data.product_url_settings" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Short)https://demo.mybigcommerce.com/ipod-nano/</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="product_url_settings"
                                                    v-model="form_data.product_url_settings" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Long)https://demo.mybigcommerce.com/products/ipod-nano.html</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="product_url_settings"
                                                    v-model="form_data.product_url_settings" type="radio" value="3">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Category) Hinthttps://demo.mybigcommerce.com/mp3-players/ipod-nano/</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Category URL Settings</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Category URL Format</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="category_url_format"
                                                    v-model="form_data.category_url_format" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Short)https://demo.mybigcommerce.com/apple-ipod/</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="category_url_format"
                                                    v-model="form_data.category_url_format" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Long)https://demo.mybigcommerce.com/categories/apple-ipod.html</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Web Page URL Settings</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Web Page URL Format</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="web_page_url_format"
                                                    v-model="form_data.web_page_url_format" type="radio" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Short)https://demo.mybigcommerce.com/about-us/</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="web_page_url_format"
                                                    v-model="form_data.web_page_url_format" type="radio" value="2">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">SEO Optimized (Long)https://demo.mybigcommerce.com/pages/about-us.html</label>
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