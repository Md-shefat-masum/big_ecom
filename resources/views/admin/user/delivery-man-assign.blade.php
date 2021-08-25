@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Assign Delivery Man'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Assign Delivery Man</h5>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">first name</th>
                                            <th scope="col">last name</th>
                                            <th scope="col">username</th>
                                            <th scope="col">email</th>
                                            <th scope="col">role name</th>
                                            <th scope="col">Action</th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as $item)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $item->first_name }}</td>
                                                <td>{{ $item->last_name }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->email }}</td>
                                                {{-- <td>{{ $item->role_id }}</td> --}}
                                                <td>{{ $item->role_information ? $item->role_information->name : $item->role_id }}</td>
                                                <td>
                                                    <div>
                                                        {{-- <a type="button" href="{{ route('admin_user_view',$item->id) }}" class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i> <span>view</span>
                                                        </a> --}}
                                                        <a type="button" href="{{ route('admin_user_edit',$item->id) }}" class="btn btn-success waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> <span>Assign</span>
                                                        </a>
                                                        {{-- <a type="button" href="" data-toggle="modal" data-target="#deleteModal"
                                                            onclick="return (modal_delete_form.action='{{ route('admin_user_delete') }}', modal_delete_form.id.value='{{$item->id}}')"
                                                            class=" btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>delete</span>
                                                        </a> --}}
                                                        {{-- <a type="button" href="#"
                                                            onclick="return (confirm('hei, Do you sure want to delete.') && $.post('{{route('admin_user_delete',['id'=>$item->id])}}',(res)=>{console.log(res,$(this).parents('tr').remove())}))"
                                                            class=" btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>delete</span>
                                                        </a> --}}
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
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



