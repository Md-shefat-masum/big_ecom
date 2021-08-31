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
                                <li style="align-self: center;">
                                    <pagination :data="products" :limit="-1" :size="'small'" :show-disabled="true" :align="'center'" @pagination-change-page="get_products">
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
                                        <tr v-for="product in products.data" :key="product.id">
                                            <th scope="row"><input type="checkbox"></th>
                                            <td>
                                                <img
                                                    :src="`/${ product.related_image[0].image }`"
                                                    :alt="product.product_name"
                                                    style="height: 70px;">
                                            </td>
                                            <td>@{{ product.sku }}</td>
                                            <td>@{{ product.track_inventory_on_the_variant_level_stock }}</td>
                                            <td>@{{ product.product_name }}</td>
                                            <td>$@{{ product.default_price }}</td>
                                            <td>
                                                <ul class="d-flex justify-content-end table_actions">
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-list-ul"></i></a>
                                                        <ul>
                                                            <li><a href="#">view</a></li>
                                                            <li><a :href="`/admin/product/edit/${product.id}`">edit</a></li>
                                                            <li><a href="#">view orders</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <pagination :data="products" :show-disabled="true" :align="'center'" @pagination-change-page="get_products"></pagination>
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
        <script src="{{ asset('contents/admin') }}/vue/product_list_vue.js"></script>
    @endpush
@endsection

