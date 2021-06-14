@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Currencies</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Configure what currencies customers will see and be charged in on your store.</p>
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Allow shoppers to purchase in their currency</h6>
                        <hr>
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" novalidate="">
								
										<div class="col-12">
											<a class="btn btn-light" href="{{route('admin_store_setup_add_currencies')}}">Add new currency
                                            </a>
										</div>
									</form>
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
<!--End content-wrapper-->

@endsection