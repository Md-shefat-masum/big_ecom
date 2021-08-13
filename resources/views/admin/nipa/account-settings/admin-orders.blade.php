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
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Customer Id</th>
                                                <th scope="col">Sub Total</th>
                                                <th scope="col">Invoice Id</th>
                                                {{-- <th scope="col" class="text-right">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                {{-- <th scope="row"><input type="checkbox"></th> --}}
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->sub_total }}</td>
                                                <td>{{ $item->invoice_id }}</td>
                                              
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