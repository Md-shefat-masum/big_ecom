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
