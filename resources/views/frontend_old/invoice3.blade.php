@extends('frontend.frontend')
@section('content')


<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact_page_bg" id="get-invoice">
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">

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
                                        #@{{get_invoice_id}}</span></h3>

                                <div class="billed"><span class="font-weight-bold text-uppercase">TO:</span><span
                                        class="ml-1"> @{{get_billing_address.first_name}}
                                        @{{get_billing_address.last_name}}</span></div>
                                <div class="billed"><span class="font-weight-bold text-uppercase">PHONE:</span><span
                                        class="ml-1"> @{{get_billing_address.phone}}</span></div>
                                <div class="billed"><span class="font-weight-bold text-uppercase">EMAIL:</span><span
                                        class="ml-1"> @{{get_billing_address.email}}</span></div>
                                <div class="billed"><span class="font-weight-bold text-uppercase">ISSUE
                                        DATE::</span><span class="ml-1"> @{{get_invoice_date}}</span></div>
                                {{-- <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span
                                        class="ml-1">#1345345</span></div> --}}
                            </div>
                            {{-- <div class="col-md-6 text-right mt-3">
                            </div> --}}
                        </div>
                        <div class="mt-3">
                            <div class="table-responsive">
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

                                        <tr v-for="(product,index) in get_latest_saved_cart.order_information"
                                            :key="index">
                                            <td>@{{index+1}}</td>
                                            <td>@{{product.product_name}}</td>
                                            <td>@{{product.qty}}</td>
                                            <td>$ @{{product.price}}</td>
                                            <td>$ @{{product.qty * product.price}}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                            <td>$ @{{ get_latest_saved_cart.sub_total }}</td>
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



@push('js')
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