@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container" >
            @include('admin.layouts.includes.bread_cumb',['title'=>'Edit a Category'])
            <p>Products in your store are grouped by categories, which makes them easier to find. Fill out the form below to create a new category.</p>
            <div class="row">
                <div class="col-lg-12" id="category_form" >

                    <form action="#" id="form_body" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}" v-model="form_data.id">
                        <div class="card">
                            <div class="card-header d-inline-flex justify-content-md-between">
                                <h4>Category Details</h4>
                                <a href="{{ route('admin_product_categories') }}" class="btn btn-warning mt-sm-3 mt-md-0" type="button">
                                    <i class="fa fa-angle-left"></i> Back
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="from-group row mb-4 justify-contents-center">
                                    <label for="name" class="col-lg-3 text-lg-right">Name : </label>
                                    <div class="col-lg-7">
                                        <input name="name" value="{{ $category->name }}" @keyup="make_url" v-model="form_data.name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="url" class="col-lg-3 text-lg-right">URL : </label>
                                    <div class="col-lg-7">
                                        <input name="url" value="{{ $category->url }}" @keyup="change_url" v-model="form_data.url" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="description" class="col-lg-3 text-lg-right">Description : </label>
                                    <div class="col-lg-7">
                                        <textarea name="description" id="mytextarea1" class="form-control">{!! $category->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="parent_id" class="col-lg-3 text-lg-right">Parent Category : </label>
                                    <div class="col-lg-7">
                                        <div>
                                            <div id="treeview_container" class="hummingbird-treeview well h-scroll-large">
                                                <!-- <div id="treeview_container" class="hummingbird-treeview"> -->
                                                <ul id="treeview" class="hummingbird-base">

                                                    {!! $category_tree_view !!}

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="template_layout_file" class="col-lg-3 text-lg-right">Template Layout File : </label>
                                    <div class="col-lg-7">
                                        <input name="template_layout_file" value="{{ $category->template_layout_file }}" v-model="form_data.template_layout_file" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="sort_order" class="col-lg-3 text-lg-right">Sort Order: </label>
                                    <div class="col-lg-7">
                                        <input name="sort_order" type="text" value="{{ $category->sort_order }}" v-model="form_data.sort_order" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="default_product_sort" class="col-lg-3 text-lg-right">Default Product Sort: </label>
                                    <div class="col-lg-7">
                                        <select name="default_product_sort"  value="{{ $category->default_porduct_sort }}" v-model="form_data.default_product_sort" class="form-control">
                                            <option value="0">Use Store Settings Default</option>
                                            <option value="1">Featured Items</option>
                                            <option value="2">Newest Items</option>
                                            <option value="3">Bestselling</option>
                                            <option value="4">Alphabetical: A to Z</option>
                                            <option value="5">Alphabetical: Z to A</option>
                                            <option value="6">Avg. Customer Review</option>
                                            <option value="7">Price: Low to High</option>
                                            <option value="8">Price: High to Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="category_image" class="col-lg-3 text-right">Category Image: </label>
                                    <div class="col-lg-7">
                                        <input name="category_image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>Search Engine Optimization</h5>
                            </div>
                            <div class="card-body">
                                <div class="from-group row mb-4">
                                    <label for="page_title" class="col-lg-3 text-lg-right">Page Title : (optional)</label>
                                    <div class="col-lg-7">
                                        <input name="page_title"  value="{{ $category->page_title }}" v-model="form_data.page_title" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="meta_keywords" class="col-lg-3 text-lg-right">Meta Keywords : (optional)</label>
                                    <div class="col-lg-7">
                                        <input name="meta_keywords" value="{{ $category->meta_keywords }}" v-model="form_data.meta_keywords" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="meta_description" class="col-lg-3 text-lg-right">Meta Description : (optional)</label>
                                    <div class="col-lg-7">
                                        <input name="meta_description" value="{{ $category->meta_description }}" v-model="form_data.meta_description" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="from-group row mb-4">
                                    <label for="search_keywords" class="col-lg-3 text-lg-right">Search Keywords : (optional)</label>
                                    <div class="col-lg-7">
                                        <input name="search_keywords" value="{{ $category->search_keywords }}" v-model="form_data.search_keywords" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <a href="{{ route('admin_product_categories') }}" class="btn btn-warning mr-3" type="button">
                                    <i class="fa fa-angle-left"></i> Back
                                </a>
                                <button @click.prevent="update" class="btn btn-info" type="button">
                                    <i class="fa fa-upload"></i> Submit
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

    @push('ccss')
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/collapse_tree/hummingbird-treeview.min.css">
    @endpush

    @push('cjs')
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/collapse_tree/hummingbird-treeview.min.js"></script>

        <script>
            $(function(){
                $('#mytextarea1').summernote({
                    height: 200,
                    tabsize: 2
                });
            })
        </script>

        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>
    @endpush
@endsection

