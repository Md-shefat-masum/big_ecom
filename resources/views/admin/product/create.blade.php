@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container">
            {{-- @include('admin.include.bread_cumb',['title'=>'Product Create']) --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="product">
                        <div class="card-body">
                            <div class="card-title">Add Product</div>
                            <hr />
                            <form class="product_insert_form row" method="POST" action="#" enctype="multipart/form-data">
                                @csrf
                                <div class="preloader"></div>
                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">Name</label>
                                    <input v-model="product_name" type="text" class="form-control">
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">SKU</label>
                                    <input type="text" v-model="sku" class="form-control" placeholder="THX-1138">
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">Product Type</label>
                                    <select name="" v-model="product_type" class="form-control">
                                        <option value="">Physical</option>
                                        <option value="">Digital</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">Default Price * (excluding tax)</label>
                                    <input type="text" v-model="default_price" class="form-control" placeholder="$50">
                                    <span><i class="fa fa-angle-right"></i> More pricing</span>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">Brand</label>
                                    <select name="" v-model="brand_id"  class="form-control">
                                        <option value="">Sagaform</option>
                                        <option value="">Common Good</option>
                                        <option value="">OFS</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="" class=" col-form-label">Weight</label>
                                    <input type="text" v-model="weight" class="form-control" placeholder="KGS">
                                </div>

                                <div class="form-group col-12">
                                    {{-- <category></category> --}}
                                    <div class="card category_card_dropdown">
                                        <div class="card-header">
                                            <label for="" class=" col-form-label">Categories</label>
                                        </div>
                                        <div class="card-body overflow-hidden category_block" v-html="category_html">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <label for="" class=" col-form-label">Description</label>
                                        </div>
                                        <div class="card-body">
                                            <textarea name="" v-model="description" class="form-control" id="mytextarea1"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <label for="" class=" col-form-label">Images &amp; Videos</label>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus"></i>Add from URL</button>
                                                <label class="btn btn-outline-secondary mb-0" for="upload_image"><i class="fa fa-upload"></i> Upload Image</label>
                                                <input type="file" class="" name="upload_image" style="opacity: 0;" id="upload_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Product Identifiers</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">SKU</label>
                                                        <input type="text" v-model="product_identifier_sku" class="form-control" placeholder="THX-1138">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Manufacturer Part Number (MPN)</label>
                                                        <input type="text" v-model="manufacture_part_number" class="form-control" placeholder="THX-1138">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Product UPC/EAN</label>
                                                        <input type="text" v-model="product_upc" class="form-control" placeholder="THX-1138">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Global Trade Number (GTN)</label>
                                                        <input type="text" v-model="global_trade_number" class="form-control" placeholder="THX-1138">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Bin Picking Number (BPN)</label>
                                                        <input type="text" v-model="bin_picking_number" class="form-control" placeholder="THX-1138">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Pricing</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Default Price * (excluding tax)</label>
                                                        <input type="text" v-model="pricing_default_price" class="form-control" placeholder="$0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Tax Class </label>
                                                        <select name="" v-model="tax_class" class="form-control" >
                                                            <option value=""> Default Tax Class</option>
                                                            <option value=""> Non-Taxable Products</option>
                                                            <option value=""> Shipping</option>
                                                            <option value=""> Gift Wrapping</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Tax Provider Tax Code</label>
                                                        <input type="text" v-model="tax_provider_tax_code" class="form-control" placeholder="Imperial-luxury-tax-01">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>
                                                        <a href="#" @click.prevent="show_advance_pricing = !show_advance_pricing">
                                                            <i class="fa fa-angle-right" v-if="!show_advance_pricing"></i>
                                                            <i class="fa fa-angle-down" v-else></i>
                                                            <span v-if="!show_advance_pricing">Show Advanced Pricing</span>
                                                            <span v-else>Hide Advanced Pricing</span>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>

                                            <div class="row" v-if="show_advance_pricing">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Cost</label>
                                                        <input type="text" v-model="cost" class="form-control" placeholder="$0">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">MSRP</label>
                                                        <input type="text" v-model="msrp" class="form-control" placeholder="$0">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Sale Price</label>
                                                        <input type="text" v-model="sales_price" class="form-control" placeholder="$0">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" v-if="show_advance_pricing">
                                                <div class="col-12">
                                                    <h5>Bulk Pricing</h5>
                                                    <p>
                                                        Create bulk pricing rules to offer price discounts based on quantity breaks.
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="" class=" col-form-label">Discount Type</label>
                                                        <select name="" v-model="bulk_pricing_discount_type" class="form-control" >
                                                            <option value=""> % Discount</option>
                                                            <option value=""> $ Fixed Amount</option>
                                                            <option value=""> $ Off/Unit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <table class="table table-bordered" style="border: 0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-right">Min Quantity</th>
                                                                <th class="text-right">% Discount</th>
                                                                <th class="text-right">Unit Price</th>
                                                                <th style="border: 0;width:15px;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="(tier,index) in bulk_pricing_discount_options" :key="index">
                                                                <td class="text-right">
                                                                    <input type="text" class="text-right form-control" v-model="tier.min_quantity">
                                                                </td>
                                                                <td class="text-right">
                                                                    <input type="number" class="text-right form-control" v-model="tier.discount" style="width:95%;display:inline-block;"> %
                                                                </td>
                                                                <td class="text-right">
                                                                    <input type="number" class="text-right form-control" v-model="tier.unit_price">
                                                                </td>
                                                                <td style="border: 0">
                                                                    <a href="#" @click.prevent="remove_tier(index)"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a href="#" class="btn btn-outline-secondary mt-2" @click.prevent="add_tier"><i class="fa fa-plus"></i> Add tier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Inventory</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center mb-3">
                                                    <input @change="track_inventory = !track_inventory" id="track_inventory" class="form-control d-inline-block mr-2" style="width: 30px" type="checkbox">
                                                    <label for="track_inventory" style="line-height: 30px;margin: 0;">Track Inventory</label>
                                                </div>
                                                <div class="col-12" v-if="track_inventory">
                                                    <ul class="pl-5">
                                                        <li class="d-flex align-items-center mb-2">
                                                            <input @change="on_the_product_level = !on_the_product_level" type="radio" name="on_the_product_level" class="form-control mr-2" style="width: 30px">
                                                            <label style="line-height: 30px;margin: 0;" for=""> On the product level</label>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-2">
                                                            <input @change="on_the_product_level = !on_the_product_level" type="radio" name="on_the_product_level" class="form-control mr-2" style="width: 30px">
                                                            <label style="line-height: 30px;margin: 0;" for=""> On the variant level</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" v-if="on_the_product_level">
                                                <div class="form-group col-md-6">
                                                    <label for="" class=" col-form-label">Stock</label>
                                                    <input type="text" v-model="track_inventory_on_the_variant_level_stock" class="form-control" placeholder="0" value="0">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="" class=" col-form-label">Low Stock</label>
                                                    <input type="text" v-model="track_inventory_on_the_variant_level_low_stock" class="form-control" placeholder="0" value="0">
                                                </div>
                                            </div>
                                            <div class="row" v-else>
                                                <div class="col-12">
                                                    <span>Add variant options to create variants and manage inventory</span>
                                                    <a href="#" class="text-info" style="text-decoration: none;">below</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <h5 class="text-center">Product Options</h5>
                                    <p class="text-center">Create product variations and customizations.</p>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Variations</h5>
                                            <p>Add variant options like size and color to create variants for this product.</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h6>Variant Options</h6>
                                                <a href="#" data-toggle="modal" data-target="#varientModal" class="btn btn-outline-info">
                                                    <i class="fa fa-gear"></i>
                                                    Add Variant Option
                                                </a>
                                            </div>

                                            <div class="row my-3">
                                                <div class="col-12">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Option Name</th>
                                                                <th>Type</th>
                                                                <th>Values</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Size</td>
                                                                <td>Dropdown</td>
                                                                <td>Small, Medium, Large</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Color</td>
                                                                <td>Dropdown</td>
                                                                <td>Red, Green, Blue</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Unit</td>
                                                                <td>Dropdown</td>
                                                                <td>Kg, litr</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="row mt-5 mb-4">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Variants</h5>
                                                        <div class="dropdown mr-1">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle" id="edit_columns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                                                Edit columns
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="edit_columns"
                                                                style=" width: 234px;
                                                                        right: 26px;
                                                                        padding: 5px;
                                                                        box-sizing: border-box;">
                                                                <ul>
                                                                    <li v-for="(edit_column_name,index) in edit_columns_lists" :key="index" class="d-flex">
                                                                        <input type="checkbox" v-model="edit_column_name.checked" :name="edit_column_name.name"
                                                                            :id="edit_column_name.name" class="form-control"
                                                                            style="width: 24px;height:24px; margin-right: 10px;">
                                                                        <label :for="edit_column_name">@{{edit_column_name.name}}</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-striped table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th v-for="(edit_column_name,index) in edit_columns_lists" v-if="edit_column_name.checked" :key="edit_column_name+Math.random()">
                                                                    <span>
                                                                        @{{edit_column_name.name}}
                                                                    </span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="variation in this.variation_permutaion" :key="variation">
                                                                <td
                                                                    :style="
                                                                        edit_column_name.name == 'purchasable' ? 'width:112px;':'' +
                                                                        edit_column_name.name == 'Image' ? 'width:30px;':''
                                                                    "
                                                                    v-for="(edit_column_name,index) in edit_columns_lists"
                                                                    v-if="edit_column_name.checked"
                                                                    :key="edit_column_name+Math.random()">

                                                                    <span v-if="edit_column_name.name == 'purchasable'">
                                                                        <input type="checkbox" class="form-control" style="width: 24px; height:24px;">
                                                                    </span>
                                                                    <span v-else-if="edit_column_name.name == 'Variant (Read-only)'">
                                                                        @{{variation}}
                                                                    </span>
                                                                    <span v-else-if="edit_column_name.name == 'Image'">
                                                                        <label :for="variation.replaceAll(' ','_')"><i style="font-size: 24px;" class="fa fa-camera"></i></label>
                                                                        <input style="visibility: hidden;opacity:0;width:0;" type="file" :name="variation.replaceAll(' ','_')" :id="variation.replaceAll(' ','_')">
                                                                    </span>
                                                                    <span v-else>
                                                                        {{-- @{{edit_column_name.name}} --}}
                                                                        <input type="text" style="width: 130px;" class="form-control" :placeholder="edit_column_name.name">
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Customizations</h5>
                                            <p>Add modifier options like a text box, checkbox, or file upload to enable further product customization.</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h6>Modifier Options</h6>
                                                <a href="#" data-toggle="modal" data-target="#modifierOptionModal" class="text-info"><i class="fa fa-gear"></i> Configure Options</a>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Option Name</th>
                                                                <th>Type</th>
                                                                <th>Values</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Custom Message</td>
                                                                <td>Text Field</td>
                                                                <td>Give value</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tax info</td>
                                                                <td>Text Field</td>
                                                                <td>Give value</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Writers</td>
                                                                <td>Dropdown</td>
                                                                <td>abul kasem,jolil khan</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <h5 class="text-center">Storefront</h5>
                                    <p class="text-center">Setup what customers will see on the storefront.</p>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Storefront Details</h5>
                                            <div class="form-group form-check">
                                                <input type="checkbox" v-model="set_as_store_front" class="form-check-input">
                                                <label for="" class="form-check-label"><p>Set as a Featured Product on my Storefront</p></label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="" class="form-label">Search Keywords</label>
                                                <input type="text" class="form-control" v-model="search_keywords" placeholder="e.g.wiget, affordable, portable, etc..">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Sort Order</label>
                                                        <input type="text" v-model="sort_order" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Template Layout File </label>
                                                        <input type="text" v-model="template_layout_file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Warranty Information </label>
                                                        <textarea type="text" v-model="waranty_information" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Availability Text </label>
                                                        <input type="text" v-model="availability_text" class="form-control" placeholder="Usually ships in 24 hours."/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Condition </label>
                                                        <select name="" v-model="product_condition" class="form-control">
                                                            <option v-for="(conditions, index) in conditions"  :key="index" value="">@{{conditions}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label for="" class="form-check-label">Show condition on storefront</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="from-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Custom Fields</h5>
                                            <p style="width: 70%;">
                                                Custom fields allow you to specify additional information that will appear on the products page. Custom fields appear automatically in the product's details if they are defined on
                                                the product. If you don't want to show any custom fields, simply remove them from the product.
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div v-for="(field,index) in custom_fields" :key="field.name+Math.random()"
                                                class="d-flex justify-content-between align-items-baseline mb-3">
                                                <div class="ml-3" style="width: 47%">
                                                    <label for="">Custom Field Name: *</label>
                                                    <input type="text" class="form-control" v-model="field.name" placeholder="e.g.Wine Vintage">
                                                </div>
                                                <div class="ml-3" style="width: 47%">
                                                    <label for="">Custom Field Name: *</label>
                                                    <input type="text" class="form-control" v-model="field.value" placeholder="e.g.Wine Vintage">
                                                </div>
                                                <div style="align-self: flex-end;margin-bottom: 10px;">
                                                    <a href="#" @click.prevent="remove_custom_field(index)"><i class="fa fa-trash-o text-danger"></i></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="#" @click.prevent="add_custom_field" class="text-info d-block ml-4 mt-2">
                                                        <i class="fa fa-plus"></i> Add Custom Fields
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="from-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Related Products</h5>
                                            <div class="form-group form-check">
                                                <input type="checkbox" v-model="automatically_show_related_prodauct_on_my_store_front" class="form-check-input">
                                                <label for="" class="form-check-label">
                                                    <p>Automatically show related products on my storefront</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5>Related Products</h5>
                                            <table class="table table-striped ">
                                                <tbody>
                                                    <tr v-for="item in 4" :key="item">
                                                        <td style="width: 50px;">
                                                            <img style="height: 40px;" src="https://cdn11.bigcommerce.com/s-ur5cwditjs/products/93/images/311/leparfaitmedium3.1622960498.220.290.jpg?c=1" alt="">
                                                        </td>
                                                        <td style="width: 200px;">
                                                            <a href="#">[Sample] 1 L Le Parfait Jar</a>
                                                        </td>
                                                        <td>$99.5</td>
                                                        <td class="text-center">
                                                            <i class="fa fa-trash-o text-danger"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <h5 class="text-center">Fulfillment</h5>
                                    <p class="text-center">Setup shipping and inventory details for this product.</p>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Dimensions & Weight</h5>
                                            <p style="width: 70%;">
                                                Enter the dimensions and weight of this product
                                                to help calculate shipping rate. These measurements
                                                are for the product's shipping container. They are used to help calculate shipping price and do not show up on your storefront.
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Weight (KGS)*</label>
                                                        <input type="text" v-model="weight" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Width (Centimeters) </label>
                                                        <input type="text" v-model="width" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Height (Centimeters) </label>
                                                        <textarea type="text" v-model="height" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Depth (Centimeters) </label>
                                                        <input type="text" v-model="depth" class="form-control" placeholder="Usually ships in 24 hours."/>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Shipping Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Fixed Shipping Price</label>
                                                        <input type="text" v-model="fixed_shipping_price" class="form-control" placeholder="$0">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group from-check">
                                                        <input type="checkbox" v-model="free_shipping" class="form-check-input">
                                                        <label for="" class="form-check-label">Free Shipping</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Purchasability</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="purchasability" @change="purchasability='can_be_purchased_in_online_store'" name="purchasability" checked type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="purchasability" style="line-height: 30px; margin: 0px;">This product can be purchased in my online store</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="purchasability2" @change="purchasability='comming_soon'" name="purchasability" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="purchasability2" style="line-height: 30px; margin: 0px;">This product is coming soon but I want to take pre-orders</label>
                                                        </div>
                                                    </div>
                                                    <div class="row pl-5 mb-5" v-if="purchasability == 'comming_soon'">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="">Message</label>
                                                                <input type="text" class="form-control" v-model="preorder_message" value="Expected release date is %%DATE%%">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="">Release Date</label>
                                                                <input type="date" v-model="release_date" class="form-control" placeholder="D MMM YYYY">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3" style="align-self: center;margin-top: 24px;">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <input  name="" v-model="remove_pre_order_status_on_this_date" type="checkbox" class="form-control d-inline-block mr-2" style="width: 42px;">
                                                                <label for="" style="line-height: 16px; margin: 0px;">Remove pre-order status on this date</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="purchasability3" @change="purchasability='can_not_be_purchased_in_online_store'" name="purchasability" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="purchasability3" style="line-height: 30px; margin: 0px;">This product cannot be purchased in my online store</label>
                                                        </div>
                                                    </div>
                                                    <div class="row pl-5 mb-5" v-if="purchasability == 'can_not_be_purchased_in_online_store'">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <input  name="" type="checkbox" v-model="show_call_for_pricing" class="form-control d-inline-block mr-2" style="width: 26px;">
                                                                    <label for="" style="line-height: 16px; margin: 0px;">Show “Call for pricing” message instead of the price</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Call for pricing label</label>
                                                                <input type="text" class="form-control" v-model="call_number" value="Contact us at 555-5555">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Minimum Purchase Quantity</label>
                                                        <input type="text" v-model="minimum_purchase_quantity" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Maximum Purchase Quantity</label>
                                                        <input type="text" v-model="maximum_purchase_quantity" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Gift Wrapping</h5>
                                            <p>Select the gift wrapping option you want to apply to this product.</p>
                                        </div>
                                        <div class="card-body">
                                            <h5>Gift Wrapping options</h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="wrapping" name="wrapping" checked type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="wrapping" style="line-height: 30px; margin: 0px;">Use all visible gift wrapping options I've created</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="wrapping2" name="wrapping" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="wrapping2" style="line-height: 30px; margin: 0px;">Don't allow this item to be gift wrapped</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="wrapping3" disabled name="wrapping" type="radio" class="form-control d-inline-block mr-2" style="width: 30px;">
                                                            <label for="wrapping3" style="line-height: 30px; margin: 0px;">Specify gift wrapping options for this product (no Gift wrapping options available to select)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Customs Information</h5>
                                            <p style="width: 70%;">
                                                Provide customs information for this product to assist border officers to calculate customs duties and
                                                 fees when shipping internationally. Will be used by installed apps that require this information.
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="col-12 d-flex align-items-center mb-3">
                                                            <input id="custom_information" @click="manage_customs_information = !manage_customs_information" v-model="manage_customs_information" name="custom_information" type="checkbox" class="form-control d-inline-block mr-2" style="width: 25px;">
                                                            <label for="custom_information" style="line-height: 30px; margin: 0px;">Manage customs information</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12" v-if="manage_customs_information">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Country of origin</label>
                                                                <p>Usually this is the country where this product was manufactured or produced.</p>
                                                                <select name="courtry_of_origin" v-model="courtry_of_origin" class="form-control" >
                                                                    <option value="" v-for="country in countries" :key="country"> @{{country}}</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Commodity description (optional)</label>
                                                                <p>A succinct and precise description for border officers to identify and verify this product.</p>
                                                                <textarea name="" class="form-control" ></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">HS codes</label>
                                                                <p>Assists border officers to classify this product.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card-body">
                                                                <div v-for="(hs_code,index) in hs_codes" :key="hs_code.country+Math.random()"
                                                                    class="d-flex justify-content-between align-items-baseline mb-3">
                                                                    <div class="ml-3" style="width: 47%">
                                                                        <label for="">Destination Country</label>
                                                                        <select name="" v-model="hs_code.country" class="form-control">
                                                                            <option value="" v-for="country in countries" :key="country"> @{{country}}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="ml-3" style="width: 47%">
                                                                        <label for="">HS Code</label>
                                                                        <input type="text" v-model="hs_code.code" class="form-control" v-model="hs_code.code">
                                                                    </div>
                                                                    <div style="align-self: flex-end;margin-bottom: 10px;">
                                                                        <a href="#" @click.prevent="remove_hs_code(index)"><i class="fa fa-trash-o text-danger"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="#" @click.prevent="add_hs_code" class="text-info d-block ml-4 mt-2">
                                                                            <i class="fa fa-plus"></i> HS Code
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <h5>SEO & Sharing</h5>
                                    <p>Boost traffic to your online business.</p>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Search Engine Optimization</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Page Title</label>
                                                        <input type="text" v-model="page_title" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Product Url *</label>
                                                        <input type="text" v-model="product_url" class="form-control" style="width: 83%; display: inline-block;">
                                                        <button class="btn btn-outline-danger">Reset</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Meta Description</label>
                                                        <textarea type="text" v-model="meta_description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Open Graph Sharing</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Object Type</label>
                                                    <select name="" v-model="open_graph_sharing_object_type" class="form-control">
                                                        <option value="">Album</option>
                                                        <option value="">Book</option>
                                                        <option value="">Drink</option>
                                                        <option value="">Food</option>
                                                        <option value="">Game</option>
                                                        <option value="">Movie</option>
                                                        <option value="">Product</option>
                                                        <option value="">Song</option>
                                                        <option value="">TV Show</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h5>Title</h5>
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <input id="use_title" v-model="open_graph_use_product_name" name="custom_information" type="checkbox" class="form-control d-inline-block mr-2" style="width: 25px;">
                                                        <label for="use_title" style="line-height: 30px; margin: 0px;">Use product name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h5>Description</h5>
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <input id="use_description" v-model="open_graph_use_product_description" name="custom_information" type="checkbox" class="form-control d-inline-block mr-2" style="width: 25px;">
                                                        <label for="use_description" style="line-height: 30px; margin: 0px;">Use meta description</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h5>Image</h5>
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <input id="use_thumbnail_1" v-model="open_graph_use_thumbnail_image" name="use_thumbnail_image" checked type="radio" class="form-control d-inline-block mr-2" style="width: 25px;">
                                                        <label for="use_thumbnail_1" style="line-height: 30px; margin: 0px;">Use thumbnail image</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <input id="use_thumbnail_2" v-model="open_graph_dont_use_an_image" name="use_thumbnail_image" type="radio" class="form-control d-inline-block mr-2" style="width: 25px;">
                                                        <label for="use_thumbnail_2" style="line-height: 30px; margin: 0px;">Don’t use an image</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label"></label>
                                    <div class="">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="varientModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="varientModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" style="background: #373737">
                                <div class="modal-content card">
                                    <div class="modal-header card-header">
                                        <h5>Variant Options  (2 options , 9 variants)</h5>
                                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> --}}
                                    </div>
                                    <div class="modal-body card-body custom_modal_body custom_scroll">
                                        <p style="width: 80%;">
                                            Use Variant Options to generate Variants, each with a unique SKU that can be used to track inventory.
                                            Assign attributes such as Image, Default Price, and Weight on the Variant level.
                                        </p>

                                        <div class="row mb-3" v-for="item in 4" :key="item">
                                            <div class="col-md-3">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control">
                                                <a href="#" class="text-danger">Delete Option</a>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Type</label>
                                                <select name=""  class="form-control">
                                                    <option value="">Swatch</option>
                                                    <option value="">Radio Button</option>
                                                    <option value="">Rectangle List</option>
                                                    <option value="">Dropdown</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Values</label>
                                                <div class="row mb-2" v-for="item in 5" :key="item">
                                                    <div class="col-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex">
                                                            <input type="radio" class="form-control" name="one_default" style="width: 24px; height: 24px;">
                                                            <label for="" class="mb-0 ml-1" style="line-height: 24px;">default</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <a href="#" class="text-danger"><i class="fa fa-minus-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr style="width: 100%;">
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                
                                            </div>
                                        </div>

                                        <div class="sticky-bottom action_btns">
                                            <button class="btn btn-outline-info">
                                                <i class="fa fa-plus"></i>
                                                Add Variant Option
                                            </button>
                                            <button class="btn btn-outline-info">
                                                <i class="fa fa-plus"></i>
                                                Add Shared Variant Option
                                            </button>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save Variants</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modifierOptionModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modifierOptionModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" style="background: #373737">
                                <div class="modal-content card">
                                    <div class="modal-header card-header">
                                        <h5>Modifier Options (3 options) </h5>
                                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> --}}
                                    </div>
                                    <div class="modal-body card-body">
                                        <p style="width: 80%;">
                                            Modifier Options allow a customer to further customize a product or variant.
                                            They work well for products needing an input for custom messages, dates, checkboxes, and more.
                                        </p>

                                        <div class="row mb-3" v-for="item in 3" :key="item">
                                            <div class="col-md-3">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control">
                                                <a href="#" class="text-danger">Delete Option</a>
                                                <br>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label for="" class="form-check-label">Required</label>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Type</label>
                                                <select name=""  class="form-control">
                                                    <option value="">Swatch</option>
                                                    <option value="">Radio Button</option>
                                                    <option value="">Rectangle List</option>
                                                    <option value="">Dropdown</option>
                                                    <option value="">Pick List</option>
                                                    <option value="">Text Field</option>
                                                    <option value="">Numbers Only Text Field</option>
                                                    <option value="">Date Field</option>
                                                    <option value="">Multi-line Text Field</option>
                                                    <option value="">Checkbox</option>
                                                    <option value="">File Upload</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="">Values</label>
                                                <div class="row mb-2" v-for="item in 3" :key="item">
                                                    <div class="col-7">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex">
                                                            <input type="radio" class="form-control" name="one_default" style="width: 24px; height: 24px;">
                                                            <label for="" class="mb-0 ml-1" style="line-height: 24px;">default</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <a href="#" class="text-danger"><i class="fa fa-minus-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr style="width: 100%;">
                                        </div>

                                        <button class="btn btn-outline-info"><i class="fa fa-plus"></i> Add Variant Option</button>
                                        <button class="btn btn-outline-info"><i class="fa fa-plus"></i> Add Shared Variant Option</button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save Variants</button>
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

    @push('ccss')
        <link href="/contents/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="/contents/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
    @endpush

    @push('cjs')
        <script src="/contents/admin/plugins/select2/js/select2.min.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <script src="{{ asset('contents/admin') }}/custom_product_vue.js"></script>

        {{-- <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script> --}}

        <script>
            $('.multiple-select').select2({
                // theme: 'bootstrap4',
                // width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            // tinymce.init({
            //     selector: '#mytextarea1'
            // });
            // tinymce.init({
            //     selector: '#mytextarea2'
            // });
            $('#mytextarea1').summernote({
                height: 400,
                tabsize: 2
            });

            $('#mytextarea2').summernote({
                height: 400,
                tabsize: 2
            });

            $('#selectmain_category_id').on('change',function(){
                let value = $(this).val();
                $.get("/admin/product/get-all-cateogory-selected-by-main-category/"+value,(res)=>{
                    $('#selectcategory_id').html(res);
                })
            })
        </script>
    @endpush


@endsection



