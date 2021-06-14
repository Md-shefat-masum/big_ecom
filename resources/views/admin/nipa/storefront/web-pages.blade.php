@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">View Web Pages</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Web pages are used to display content that doesn't change often. For example an 'About Us' or a 'Contact Us' page.</p>
                </div>
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <a type="button" href="{{route('admin_storefront_create_web_pages')}}" class="btn btn-outline-light">Create a Web Page</a>
                        <a type="button" class="btn btn-outline-light"><i class="fa fa-trash"></i></a>
                        <hr>
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">
                                <table class="table mb-0">
									<thead>
										<tr>
											<th>Page Name</th>
											<th>Page Type</th>
											<th>Visible</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td>Shipping and returns</td>
											<td>Normal Page</td>
											<td></td>
                                            <td>
                                                <ul class="d-flex table_actions">
                                                    <li>
                                                        <a href="#"><i class="fa fa-list-ul"></i></a>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-pencil"></i> edit</a></li>
                                                            <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
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
        </div>
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->

@endsection