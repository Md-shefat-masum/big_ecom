<div>
    <div>
        <div class="account-area section-space">
            <div class="container">
                <div class="myaccount-page-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <nav class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="myaccount-nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad" aria-selected="true">Dashboard</button>
                                <button class="myaccount-nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Orders</button>
                                <button class="myaccount-nav-link" id="download-tab" data-bs-toggle="tab" data-bs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false">Download</button>
                                <button class="myaccount-nav-link" id="payment-method-tab" data-bs-toggle="tab" data-bs-target="#payment-method" type="button" role="tab" aria-controls="payment-method" aria-selected="false">Payment Method</button>
                                <button class="myaccount-nav-link" id="address-edit-tab" data-bs-toggle="tab" data-bs-target="#address-edit" type="button" role="tab" aria-controls="address-edit" aria-selected="false">address</button>
                                <button class="myaccount-nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info" type="button" role="tab" aria-controls="account-info" aria-selected="false">Account Details</button>
                                <a class="myaccount-nav-link" href="login-register.html">Logout</a>
                            </nav>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong>{{ $user->first_name }} {{ $user->last_name }}</strong> (If Not <strong>{{ $user->first_name }} {{ $user->last_name }}</strong><a href="/logout" class="logout"> Logout</a>)</p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <table class="myaccount-table table-responsive text-center table table-bordered">
                                            
                                            <thead class="thead-light">
                                            @if (count($orders) > 0)
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)    
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>{{ $item->order_status }}</td>
                                                        <td>{{ $item->total_price }}</td>
                                                        <td><a href="shop-cart.html" class="check-btn sqr-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    <b>No order found!</b>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>
                                        <table class="myaccount-table table-responsive text-center table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Kuster - Kitchen &amp; Home Appliances</td>
                                                    <td>Aug 11, 2022</td>
                                                    <td>Yes</td>
                                                    <td>
                                                        <a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2022</td>
                                                    <td>Never</td>
                                                    <td>
                                                        <a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download File</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>
                                                1355 Market St, Suite 900 <br />
                                                San Francisco, CA 94103
                                            </p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="index.html" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <form class="account-details-form mt-4" action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="first-name" class="required">First Name</label>
                                                        <input value="{{ $user->first_name }}" type="text" id="first-name" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="last-name" class="required">Last Name</label>
                                                        <input value="{{ $user->last_name }}" type="text" id="last-name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="display-name" class="required">Display Name</label>
                                                <input type="text" value="{{ $user->username }}" id="display-name" />
                                            </div>
                                            <div class="single-input-item">
                                                <label for="email" class="required">Email Addres</label>
                                                <input type="email" value="{{ $user->email }}" id="email" />
                                            </div>
                                            <fieldset>
                                                <legend>Password change</legend>
                                                <div class="single-input-item">
                                                    <label for="current-pwd" class="required">Current Password</label>
                                                    <input type="password" id="current-pwd" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="new-pwd" class="required">New Password</label>
                                                            <input type="password" id="new-pwd" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="confirm-pwd" class="required">Confirm Password</label>
                                                            <input type="password" id="confirm-pwd" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="single-input-item">
                                                <button class="check-btn sqr-btn">Save Changes</button>
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
    </div>    
</div>
