@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="campeing_list">
            @include('admin.layouts.includes.bread_cumb',['title'=>'All Offers'])
            <div class="row">
                <div class="col-12">
                    <ul class="admin_product_list_nav">
                        <li><a :class="{active:show_type=='all'}" @click.prevent="change_type('all')" href="#">All</a></li>
                        <li><a :class="{active:show_type=='campeing'}" @click.prevent="change_type('campeing')" href="#">Campeing</a></li>
                        <li><a :class="{active:show_type=='offer'}" @click.prevent="change_type('offer')" href="#">Offer</a></li>
                        <li><a :class="{active:show_type=='date_over'}" @click.prevent="change_type('date_over')" href="#">Date Over</a></li>
                        <li><a :class="{active:show_type=='deleted'}" @click.prevent="change_type('deleted')" href="#">Deleted</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="filter_nav d-flex flex-wrap">
                                <li><a href="{{ route('admin_product_create_campain') }}" class="custom_white_btn">Create</a></li>
                                {{-- <li class="border_right_white"><a href="#" class="custom_white_btn custom_white_btn_square"><i class="fa fa-trash"></i></a></li> --}}
                                {{-- <li>
                                    <input type="text" class="custom_input" name="" placeholder="Filter by keyword">
                                </li> --}}
                                {{-- <li>
                                    <button class="custom_white_btn">Search</button>
                                </li> --}}

                                <li style="align-self: center;">
                                    <pagination :data="campeings" :limit="-1" :size="'small'" :show-disabled="true" :align="'center'" @pagination-change-page="get_campeings">
                                        <span slot="prev-nav"><i class="fa fa-angle-left"></i> Previous</span>
                                        <span slot="next-nav">Next <i class="fa fa-angle-right"></i></span>
                                    </pagination>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="padding-bottom: 20px;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Start</th>
                                            <th scope="col">End</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(campeing,index) in campeings.data" :key="campeing.id">
                                            <td>
                                                <img :src="`/${ campeing.image }`"
                                                    :alt="campeing.name"
                                                    style="height: 70px;">
                                            </td>
                                            <td>@{{ campeing.type }}</td>
                                            <td>@{{ campeing.name }}</td>
                                            <td>@{{ campeing.start_date }}</td>
                                            <td>@{{ campeing.end_date }}</td>
                                            <td>
                                                Subtotal: $ @{{ campeing.subtotal }} <br>
                                                Discount: @{{ campeing.discount }} % <br>
                                                Total: $ @{{ campeing.total }} <br>
                                            </td>
                                            <td>
                                                <ul class="d-flex justify-content-end table_actions">
                                                    {{-- <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li> --}}
                                                    <li>
                                                        <a href="#"><i class="fa fa-list-ul"></i></a>
                                                        <ul>
                                                            {{-- <li><a href="#">view</a></li> --}}
                                                            <li><a :href="`/admin/product/edit-campeing/${campeing.id}`">edit</a></li>
                                                            <li><a @click.prevent="delete_campeing(campeing.id,index)" href="">Delete</a></li>
                                                            {{-- <li><a href="#">view orders</a></li> --}}
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <pagination :data="campeings" :show-disabled="true" :align="'center'" @pagination-change-page="get_campeings"></pagination>
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

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/vue/campeing_vue.js"></script>
    @endpush
@endsection

