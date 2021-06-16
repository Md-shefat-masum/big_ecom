<ul class="metismenu" id="menu">
    <li>
        <div class="side_bar_top">
            <img src="{{ asset(''.Auth::user()->photo) }}" alt="profile pic">
            <h6>{{ Helper::auth_full_name() }}</h6>
        </div>
    </li>
    <li>
        <a href="/admin">
            <div class="parent-icon"><i class="fa fa-dashboard"></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    @if (Auth::user()->role_id == 1)
        <li>
            <a class="has-arrow" href="#">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User Management</div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li>
                <li>
                    <a href="{{ route('admin_user_role_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> User Role</a>
                </li>
            </ul>
        </li>
    @endif

    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Product Management</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_product_view') }}"><i class="zmdi zmdi-dot-circle-alt"></i> View</a>
            </li>
            <li>
                <a href="{{ route('admin_product_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add</a>
            </li>
            <li>
                <a href="{{ route('admin_product_search') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Search</a>
            </li>
            <li>
                <a href="{{ route('admin_product_categories') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Product Categories</a>
            </li>
            <li>
                <a href="{{ route('admin_product_option') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Product Options</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Product Filtering</a>
            </li>
            <li>
                <a href="{{ route('admin_product_reviews') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Product Reviews</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Price Lists</a>
            </li>
            <li>
                <a href="{{ route('admin_product_brands') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Brands</a>
            </li>
        </ul>
    </li>
    
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Customersss</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_customer_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>View</a>
            </li>
            <li>
                <a href="{{ route('admin_customer_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add</a>
            </li>
            <li>
                <a href="{{ route('admin_customer_search') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Search</a>
            </li>
            <li>
                <a href="{{ route('admin_customer_import') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Import</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">My Profile</div>
        </a>
        <ul class="">
            @php
                $data=Auth::user()->id;
            @endphp
            <li>
                <a href="{{ route('admin_profile_edit',$data) }}"><i class="zmdi zmdi-dot-circle-alt"></i>Edit Profile</a>
            </li>
            <li>
                <a href="{{ route('admin_profile_change_email',$data) }}"><i class="zmdi zmdi-dot-circle-alt"></i>Change Email Address</a>
            </li>
            <li>
                <a href="{{ route('admin_profile_change_password',$data) }}"><i class="zmdi zmdi-dot-circle-alt"></i>Change Password</a>
            </li>
            <li>
                <a href="{{ route('admin_profile_additional_authentication') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Additional Authentication</a>
            </li>
   
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Store Setup</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_store_setup_profile') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Store Profile</a>
            </li>
            <li>
                <a href="{{ route('admin_store_setup_currencies') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Currencies</a>
            </li>
          
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Payments</a>
            </li>
            <li>
                <a href="{{route('admin_store_setup_settings')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Store Settings Website</a>
            </li>
            <li>
                <a href="{{route('admin_store_setup_settings_display')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Store Settings Display</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Shipping</a>
            </li>
          
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Tax</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i>Accounting</a>
            </li>
          
          
   
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Account Settings</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_account_settings_invoices') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Invoices and Billing</a>
            </li>
            <li>
                <a href="{{ route('admin_account_settings_payment_method') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Payment Method</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Storefront</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_storefront_logo') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Logo</a>
            </li>
            <li>
                <a href="{{ route('admin_storefront_social_media') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Social Media Links</a>
            </li>
            <li>
                <a href="{{ route('admin_storefront_web_pages') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Web Pages</a>
            </li>
          
        </ul>
    </li>
    <li>
        <a href="{{route('admin_email')}}">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Email</div>
        </a>
    </li>


    {{--
        <li>
            <a class="has-arrow" href="#">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">Blank Pages</div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin_blade_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li>
                <li>
                    <a href="{{ route('admin_blade_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> create</a>
                </li>
                <li>
                    <a href="{{ route('admin_blade_view') }}"><i class="zmdi zmdi-dot-circle-alt"></i> view</a>
                </li>
            </ul>
        </li>
    --}}


    <li class="menu-label">Extra</li>
    <li>
        <a href="/" target="_blank">
            <div class="parent-icon"><i class="fa fa-globe"></i></div>
            <div class="menu-title">Website</div>
        </a>
    </li>
    <li>
        <a  href="{{ route('logout') }}"
            onclick="event.preventDefault(); confirm('sure!!') && document.getElementById('logout-form').submit();">
            <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
            <div class="menu-title">Logout</div>
        </a>
    </li>

    {{--
        <li class="menu-label">Labels</li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="zmdi zmdi-coffee"></i></div>
                <div class="menu-title">Important</div>
            </a>
        </li>
    --}}

</ul>
