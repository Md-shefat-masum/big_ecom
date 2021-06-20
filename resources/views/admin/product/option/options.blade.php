@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="product_option">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Product Options'])

            <div class="card">
                <div class="card-header">
                    <ul class="filter_nav d-flex flex-wrap">
                        <li><a href="{{ route('admin_product_create_option') }}" class="custom_white_btn">Create Option</a></li>
                        {{-- <li><a href="#" class="custom_white_btn">Delete</a></li> --}}
                        {{-- <li>
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
                                    <th scope="col">Variant Option Name</th>
                                    <th scope="col">Display Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Values</th>
                                    <th scope="col">Products</th>
                                    <th scope="col" class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($options as $item)
                                    <tr>
                                        <th scope="row">{{ $item->display_name }}</th>
                                        <td>{{ $item->unique_name }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>
                                            @foreach (json_decode($item->option_values) as $value)
                                                {{ $value->name }},
                                            @endforeach
                                        </td>
                                        <td>-</td>
                                        <td>
                                            <ul class="d-flex justify-content-end table_actions">
                                                <li>
                                                    <a href="#"><i class="fa fa-list-ul"></i></a>
                                                    <ul>
                                                        <li><a href="{{ route('admin_product_edit_option',$item->id) }}"><i class="fa fa-pencil"></i> edit</a></li>
                                                        <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
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

