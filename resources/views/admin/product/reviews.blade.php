@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_list">
            @include('admin.layouts.includes.bread_cumb',['title'=>'View Product Reviews'])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="#" class="custom_white_btn">Delete Selected</a></li>
                                <li><a href="#" class="custom_white_btn">Approve Selected</a></li>
                                <li><a href="#" class="custom_white_btn">Disapprove Selected</a></li>
                                <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                                </li>
                                <li>
                                    <button class="custom_white_btn">Filter</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="padding-bottom: 212px;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox"></th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col">Posted By</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in 10" :key="item">
                                            <th scope="row"><input type="checkbox"></th>
                                            <td> 1 L Le Parfait Jar</td>
                                            <td>
                                                <ul class="d-flex ">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </td>
                                            <td>Jane Doe</td>
                                            <td>[Sample] 1 L Le Parfait Jar</td>
                                            <td>Approved</td>
                                            <td>
                                                <ul class="d-flex justify-content-end table_actions">
                                                    <li>
                                                        <a href="#"><i class="fa fa-list-ul"></i></a>
                                                        <ul>
                                                            <li><a href="#">Preview</a></li>
                                                            <li><a href="#">Edit</a></li>
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

