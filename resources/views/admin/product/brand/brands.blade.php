@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_list">
            @include('admin.layouts.includes.bread_cumb',['title'=>'View Brands'])
            <p>Brands can be associated with products, allowing your customers to shop by browsing their favorite brands.</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="{{ route('admin_product_create_brands') }}" class="custom_white_btn">Add Brand</a></li>
                                {{-- <li><a href="#" class="custom_white_btn">Delete</a></li>
                                <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                                </li>
                                <li>
                                    <button class="custom_white_btn">Filter</button>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="padding-bottom: 212px;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col"><input type="checkbox"></th> --}}
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Products</th>
                                            <th scope="col" class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $item)
                                            <tr>
                                                {{-- <th scope="row"><input type="checkbox"></th> --}}
                                                <td>{{ $item->name }}</td>
                                                <td> - </td>
                                                <td>
                                                    <ul class="d-flex justify-content-end table_actions">
                                                        <li>
                                                            <a href="#"><i class="fa fa-list-ul"></i></a>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('admin_product_edit_brands',$item->id) }}">Edit</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach

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

