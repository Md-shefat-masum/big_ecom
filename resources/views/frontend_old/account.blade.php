@extends('frontend.frontend')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<div class="account_page_bg">
    <div class="container">
        <section class="main_content_area">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                                <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a>
                                <li><a href="#edit-account-details" data-toggle="tab" class="nav-link">Edit Account</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="nav-link">logout</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                        orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                        href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <h3>Downloads</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="danger">Expired</span></td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Organic - ecommerce html template</td>
                                                <td>Sep 11, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <table
                                                class="table table-responsive invoice-table invoice-order table-borderless">
                                                <tbody>
                                                    @if ((Auth::user()))


                                                    <tr>
                                                        <th>Fisrt Name :</th>
                                                        <td>{{Auth::user()->first_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Last Name :</th>
                                                        <td>{{Auth::user()->first_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email :</th>
                                                        <td>{{Auth::user()->email}}</td>

                                                    </tr>
                                                    <tr>
                                                        <th>User Name :</th>
                                                        <td>{{Auth::user()->username}}</td>

                                                    </tr>
                                                    @endif
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="edit-account-details">
                                <h3>Edit Account</h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form" id="frontend_account">
                                            <form id="form_body" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id" v-model="form_data.id">
                                                <input type="hidden" name="role_id" v-model="form_data.role_id">
                                                {{-- <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                            name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                            name="id_gender"> Mrs.</span>
                                                </div> <br> --}}
                                                <label>First Name</label>
                                                <input type="text" name="first_name" v-model="form_data.first_name">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" v-model="form_data.last_name">
                                                <label>Email</label>
                                                <input type="text" name="email" v-model="form_data.email">
                                                <label>Password</label>
                                                <input type="password" name="password" v-model="form_data.password">

                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                            moment. For that purpose, please find our contact info in
                                                            the legal notice.</em></label>
                                                </span>
                                                <div class="save_button primary_btn default_button">
                                                    <button @click.prevent="store" type="button"
                                                        class="btn btn-light px-5">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('js')
<script src="{{ asset('contents/admin') }}/frontend_vue.js"></script>
@endpush
@endsection