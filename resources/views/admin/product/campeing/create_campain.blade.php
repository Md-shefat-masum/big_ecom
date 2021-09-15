@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" id="campeing_form">
            @include('admin.layouts.includes.bread_cumb',['title'=>'Campeing Create'])

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h4>Create Campeing</h4>
                            </div>
                            <div class="card-header">
                                <form action="#" name="campeign_form">
                                    <div class="form-group">
                                        <label for="name">Type</label>
                                        <select name="type" class="form-control">
                                            <option value="campeing">Campeing</option>
                                            <option value="offer">Offer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Campeing Start Date</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">Campeing End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Products</label>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <input type="text" @keyup="search_product" v-model="search_key" placeholder="search ..." class="form-control mb-1">
                                                        <pagination :data="products" :limit="3" :size="'small'" :show-disabled="true" :align="'center'" @pagination-change-page="get_products">
                                                            <span slot="prev-nav"><i class="fa fa-angle-left"></i></span>
                                                            <span slot="next-nav"><i class="fa fa-angle-right"></i></span>
                                                        </pagination>
                                                    </div>
                                                    <div class="card-body custom_scroll" style="height: 463px;overflow-y: scroll;">
                                                        <table class="table table-hover w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Description</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="product in products.data" :key="product.id">
                                                                    <td style="white-space: normal; width:80%;padding: 5px;">
                                                                        <ul class="text-center border border-light p-1">
                                                                            <li v-if="product.related_images.length">
                                                                                <img :src="`/${product.related_images[0].image}`" style="height: 80px;margin-bottom: 5px;" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <h6>@{{ product.product_name }}</h6>
                                                                            </li>
                                                                            <li>
                                                                                $ @{{ product.default_price }}
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                    <td style="width: 20%;padding: 0;">
                                                                        <a href="#" @click.prevent="select_to_list(product)" class="btn btn-primary btn-sm" title="add"><i class="fa fa-plus"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="card">
                                                    <div class="card-body table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Description</th>
                                                                    <th>Discount</th>
                                                                    <th style="width: 160px;text-align: right;">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody v-if="camp_selected_products.length">
                                                                <tr v-for="(product,index) in camp_selected_products" :key="index">
                                                                    <td style="width: 10px;padding: 0;">
                                                                        <a href="#" @click.prevent="delete_from_list(index)" class="btn btn-outline-danger btn-sm" title="add"><i class="fa fa-trash-o"></i></a>
                                                                    </td>
                                                                    <td style="white-space: normal; width:30%;padding: 5px;">
                                                                        <ul class="text-center border border-light p-1">
                                                                            <li v-if="product.related_images.length">
                                                                                <img :src="`/${product.related_images[0].image}`" style="height: 80px;margin-bottom: 5px;" alt="">
                                                                            </li>
                                                                            <li>
                                                                                <h6>@{{ product.product_name }}</h6>
                                                                            </li>
                                                                            <li>
                                                                                $ @{{ product.default_price }}
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" min="0" max="100" v-model="product.discount" class="form-control" style="width: 75px;display: inline-block;"> %
                                                                    </td>
                                                                    <td class="text-right" v-if="product.discount>0 && product.discount <= 100">$ @{{ (  product.default_price - ( product.default_price * (product.discount/100)) ).toFixed(2) }}</td>
                                                                    <td class="text-right" v-else>$ @{{ product.default_price }}</td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody v-else>
                                                                <tr>
                                                                    <td colspan="4" class="text-center">No product selected</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot v-if="camp_selected_products.length">
                                                                <tr>
                                                                    <th colspan="3" class="text-right">Subtotal :</th>
                                                                    <td class="text-right">$ @{{ sub_total }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="3" class="text-right">Discount :</th>
                                                                    <td class="text-right">
                                                                        <input type="number" min="0" max="100" v-model="total_discount" class="form-control custom_number_input text-right" style="width: 75px;display: inline-block;"> %
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="3" class="text-right">Total :</th>
                                                                    <td class="text-right">$ @{{ total }}</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" onchange="campeign_form.camp_image.src=window.URL.createObjectURL(campeign_form.image.files[0])" name="image" id="image" class="form-control">
                                        <img src="" id="camp_image"  style="max-height: 200px;margin-top: 10px;" alt="capmp_image">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea name="note" class="form-control" style="height: 200px;"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Create</button>
                                    </div>
                                </form>
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
        <script src="/contents/admin/vue/campeing_vue.js"></script>
    @endpush
@endsection


