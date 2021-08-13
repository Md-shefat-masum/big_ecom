@extends('admin.layouts.admin')

@section('content')
@php

$order_ad=DB::table('order_addresses')->where('invoice_id',$data->invoice_id)->first();
$user=DB::table('users')->where('id',$data->user_id)->first();
$order_info=DB::table('order_information')->where('invoice_id',$data->invoice_id)->get();
@endphp
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">

                    <div class="p-3 bg-white rounded">

                        <div class="text-right mb-3"> <a class="btn btn-outline-danger btn-sm mr-5" type="button"
                                href="javascript:generatePDF()" data-title="PDF">
                                <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                Export
                            </a></div>

                        <div id="pdf">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="text-uppercase">INVOICE </h1>
                                    <h3 class="text-danger mb-0"><span
                                            class="font-weight-bold text-uppercase">ID:</span><span class="ml-1">
                                            #{{$data->invoice_id}}</span></h3>


                                </div>
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
                                        @foreach ($order_info as $item)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                            <td>00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button">Pay
                            Now</button></div> --}}


                </div>
            </div>
        </div>
    </div>
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