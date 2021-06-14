@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Invoices</div>


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
                                <table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">INVOICE #</th>
											<th scope="col">STATUS</th>
											<th scope="col">INVOICED ON</th>
											<th scope="col">TOTAL (USD)</th>
											<th scope="col">AMOUNT DUE (USD)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">INV07932585</th>
											<td>Paid</td>
											<td>May 26, 2021</td>
											<td>$0.00</td>
											<td>AMOUNT DUE (USD)</td>
										</tr>
									
									</tbody>
								</table>
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
<!--End content-wrapper-->

@endsection