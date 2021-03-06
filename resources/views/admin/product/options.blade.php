@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_option">
            {{-- @include('admin.layouts.includes.bread_cumb',['title'=>'View Products']) --}}

            <h5>Product Options</h5>


            <div class="card">
                <div class="card-header">
                    <h5>Shared Varient Option</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="padding-bottom: 212px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Variant Option Name</th>
                                    <th scope="col">Display Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Values</th>
                                    <th scope="col">Products</th>
                                    <th scope="col" class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in 10" :key="item" v-for="item in 10" :Key="item">
                                    <th scope="row">color</th>
                                    <td>color</td>
                                    <td>Dropdown</td>
                                    <td>red, blue, yellow</td>
                                    <td>10</td>
                                    <td>
                                        <ul class="d-flex justify-content-end table_actions">
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

