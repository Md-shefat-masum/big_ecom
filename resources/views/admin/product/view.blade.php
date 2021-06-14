@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_list">
            {{-- @include('admin.layouts.includes.bread_cumb',['title'=>'View Products']) --}}
            <div class="row">
                <div class="col-12">
                    <ul class="admin_product_list_nav">
                        <li><a href="#" class="active">All Products</a></li>
                        <li><a href="#">Featured</a></li>
                        <li><a href="#">Free Shipping</a></li>
                        <li><a href="#">Last Import</a></li>
                        <li><a href="#">Out Of Stock</a></li>
                        <li><a href="#">Not Visible</a></li>
                        <li><a href="#">Visible</a></li>
                        <li><a href="#">Custom Views</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="#" class="custom_white_btn">add</a></li>
                                <li class="border_right_white"><a href="#" class="custom_white_btn custom_white_btn_square"><i class="fa fa-trash"></i></a></li>
                                <li>
                                    <select name="" class="custom_input custom_input_select">
                                        <option value="">--Chose an Action--</option>
                                        <option value="">Bulk Edit</option>
                                        <option value="">Export These Product</option>
                                    </select>
                                </li>
                                <li class="border_right_white">
                                    <a href="#" class="custom_white_btn">confirm</a>
                                </li>
                                <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
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
                                            <th scope="col">Image</th>
                                            <th scope="col">Product SKU</th>
                                            <th scope="col">Stock Level</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in 10" :key="item">
                                            <th scope="row"><input type="checkbox"></th>
                                            <td><img src="https://cdn11.bigcommerce.com/s-9t3odtaup4/products/93/images/311/leparfaitmedium3.1623049257.50.50.jpg?c=1" alt=""></td>
                                            <td>SLLPJ</td>
                                            <td>N/A</td>
                                            <td>[Sample] 1 L Le Parfait Jar</td>
                                            <td>$7.00</td>
                                            <td>
                                                <ul class="d-flex justify-content-end table_actions">
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-list-ul"></i></a>
                                                        <ul>
                                                            <li><a href="#">view</a></li>
                                                            <li><a href="#">edit</a></li>
                                                            <li><a href="#">view orders</a></li>
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
    <!--End content-wrapper-->

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
    @endpush
@endsection

