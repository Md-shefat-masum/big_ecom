@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">All Product Condition</div>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="card-title"></h5>
                                <a href="{{ route('product_condition_add') }}"
                                    class="btn btn-warning waves-effect waves-light m-1">
                                    <i class="fa fa-plus"></i> <span>Add New</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Condition</th>
                                                <th scope="col">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $item->product_condition_name }}</td>
                                                <td>
                                                    <div>
                                                      
                                                        <a type="button" href="{{ route('product_condition_edit',$item->id) }}"
                                                            class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> <span>edit</span>
                                                        </a>
                                                        {{-- <a type="button" href="" data-toggle="modal" data-target="#deleteModal"
                                                            onclick="return (modal_delete_form.action='{{ route('admin_user_delete') }}',
                                                        modal_delete_form.id.value='{{$item->id}}')"
                                                        class=" btn btn-danger waves-effect waves-light m-1">
                                                        <i class="fa fa-trash-o"></i> <span>delete</span>
                                                        </a> --}}
                                                        <a type="button" href="#"
                                                            onclick="return (confirm('hei, Do you sure want to delete.') && $.post('{{route('admin_user_delete',['id'=>$item->id])}}',(res)=>{console.log(res,$(this).parents('tr').remove())}))"
                                                            class=" btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>delete</span>
                                                        </a>
                                                    </div>
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