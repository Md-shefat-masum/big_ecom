@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Orders</div>


                </div>
                <div class="breadcrumb-subtitle">
                    {{-- <p>Fill in the form below to specify the account details.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Archived Invoices</h6>
                        <hr>
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">
                                <div class="table-responsive" style="padding-bottom: 212px;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                {{-- <th scope="col"><input type="checkbox"></th> --}}
                                                <th scope="col">Customer Id</th>
                                                <th scope="col">order_id </th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">invoice_id</th>
                                                <th scope="col">product_id </th>
                                                <th scope="col">product_code</th>
                                                <th scope="col">Product Qty</th>
                                                <th scope="col">Product Color</th>
                                                <th scope="col">Product Size</th>
                                                <th scope="col">Product Price</th>
                                                {{-- <th scope="col" class="text-right">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                {{-- <th scope="row"><input type="checkbox"></th> --}}
                                                <td>{{ $item->customer_id }}</td>
                                                <td>{{ $item->order_id }}</td>
                                                <td>{{ $item->product_name}}</td>
                                                <td>{{ $item->invoice_id }}</td>
                                                <td>{{ $item->product_id }}</td>
                                                <td>{{ $item->product_code }}</td>
                                                <td>{{ $item->qty}}</td>
                                                <td>{{ $item->color}}</td>
                                                <td>{{ $item->size}}</td>
                                                <td>{{ $item->price}}</td>
                                              
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

@endsection