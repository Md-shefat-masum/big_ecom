@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid" id="pending_order_list">
        @include('admin.layouts.includes.bread_cumb',['title'=>'View Product Reviews'])

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="filter_nav d-flex flex-wrap">
                            <li><a href="#" class="custom_white_btn">DELETE SELECTED
                                </a></li>
                            <li><a href="#" class="custom_white_btn">Approve Selected</a></li>
                            <li><a href="#" class="custom_white_btn">Export</a></li>
                            <li><a href="#" class="custom_white_btn">Disapprove Selected</a></li>
                            <li>
                                <input type="text" class="custom_input" name="" placeholder="Search">
                            </li>
                            <li>
                                <button class="custom_white_btn">Search</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="padding-bottom: 212px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><input type="checkbox"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Customer Id</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="item in pending_order" :key="item.id">
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>@{{item.invoice_date}}</td>
                                        <td>
                                          @{{item.invoice_id}}
                                        </td>
                                        <td>@{{item.order_address['0'].user_id}}</td>
                                        <td>@{{item.order_address['0'].first_name}}@{{item.order_address['0'].last_name}}</td>
                                        <td>@{{item.order_status}}</td>
                                        <td>
                                            <ul class="d-flex justify-content-end table_actions">
                                                <li>
                                                    <a href="#" style="font-size: 20px;"><i
                                                            class="fa fa-list-ul"></i></a>
                                                    <ul style="height: 210px; overflow: auto;">
                                                        <li><a href="#">View Order</a></li>
                                                        <li><a href="#">Order Details</a></li>
                                                        <li><a href="#">Cancel Order</a></li>
                                                        <li><a href="#">Refund Order</a></li>
                                                        <li><a href="#">Edit Order</a></li>
                                                        <li><a href="#">Print Invoice</a></li>
                                                        <li><a href="#">Mail Invoice</a></li>
                                                        <li><a href="#">Send Message</a></li>
                                                        <li><a href="#">View Notes</a></li>
                                                        <li><a href="#">View Order Timeline</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
@push('cjs')
<script src="{{ asset('contents/admin') }}/product_new_vue.js"></script>

@endpush
@endsection