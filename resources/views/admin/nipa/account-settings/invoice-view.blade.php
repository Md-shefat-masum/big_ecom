@extends('admin.layouts.admin')

@section('content')
@php

$order_ad=DB::table('order_addresses')->where('invoice_id',$data->invoice_id)->first();
$user=DB::table('users')->where('id',$data->user_id)->first();
$order_info=DB::table('order_information')->where('invoice_id',$data->invoice_id)->get();
@endphp
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
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right mb-3">
                                    <a class="btn btn-outline-danger btn-sm mr-5" type="button"
                                        href="javascript:generatePDF()" data-title="PDF">
                                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                        Export
                                    </a>
                                </div>

                                <div id="pdf">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="text-uppercase text-info">INVOICE </h1>
                                            <h3 class="text-danger mb-0"><span
                                                    class="font-weight-bold text-uppercase">ID:</span><span
                                                    class="ml-1">
                                                    #{{$data->invoice_id}}</span></h3>
                                            <div class="billed"><span
                                                    class="font-weight-bold text-uppercase">TO:</span><span
                                                    class="ml-1"> {{$order_ad->first_name ?? NUll}}
                                                    {{$order_ad->last_name ?? NUll}}</span></div>
                                            <div class="billed"><span
                                                    class="font-weight-bold text-uppercase">PHONE:</span><span
                                                    class="ml-1"> {{$order_ad->phone}}</span></div>
                                            <div class="billed"><span
                                                    class="font-weight-bold text-uppercase">EMAIL:</span><span
                                                    class="ml-1"> {{$order_ad->email}}</span></div>
                                            <div class="billed"><span class="font-weight-bold text-uppercase">ISSUE
                                                    DATE::</span><span class="ml-1"> {{$data->invoice_date}}</span></div>


                                        </div>
                                    </div>
                                    <div class="mt-3">

                                        <div class="table-responsive" style="padding-bottom: 212px;">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product</th>
                                                        <th>Unit</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $index=1;
                                                    @endphp
                                                    @foreach ($order_info as $item)
                                                    <tr>
                                                        <td>{{$index}}</td>
                                                        <td>{{$item->product_name}}</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td>{{$item->qty * $item->price}}</td>
                                                    </tr>
                                                    @php
                                                    $index++;
                                                    @endphp
                                                    @endforeach

                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Total</td>
                                                        <td>{{$data->sub_total}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
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

@push('cjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script>
    function generatePDF() {
    var doc = new jsPDF({
        "unit": "px",
        "format": "a4"
    }); //create jsPDF object
    doc.fromHTML(
        document.getElementById("pdf"), // page element which you want to print as PDF
        40,
        0,
        {
            "width": 500,
        },
        function (a) {
            doc.save("invoice.pdf"); // save file name as HTML2PDF.pdf
        }
    );
}


</script>

@endpush
@endsection