@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Store Settings</div>


                </div>
                <div class="breadcrumb-subtitle">
                    <p>Update the settings in the form below and click "Save", or click "Cancel" to keep the current
                        settings.</p>
                </div>
                <div class="row" id="store_setup_settings_display">
                    <div class="col-xl-11 mx-auto">
                        <form id="form_body" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="mb-0 text-uppercase">Display Settings</h6>
                            <hr />

                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product
                                            Breadcrumbs</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3" name="product_breadcrumbs"
                                                v-model="form_data.product_breadcrumbs"
                                                aria-label="Default select example">
                                                <option value="">........</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Show Quantity
                                            Box
                                            for Products</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_quantity_box"
                                                    v-model="form_data.show_quantity_box" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the
                                                    quantity box on the add to cart panel</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enable Search
                                            Suggest?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="enable_search_suggest"
                                                    v-model="form_data.enable_search_suggest" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable
                                                    search suggest</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Auto Approve
                                            Reviews?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="auto_approve_reviews"
                                                    v-model="form_data.auto_approve_reviews" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, auto
                                                    approve reviews</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enable
                                            Wishlist?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="enable_wishlist"
                                                    v-model="form_data.enable_wishlist" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable
                                                    the
                                                    wishlist for my store</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enable Product
                                            Comparisons?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="enable_product_comparisons"
                                                    v-model="form_data.enable_product_comparisons" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable
                                                    product comparisons </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enable Account
                                            Creation?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="enable_account_creation"
                                                    v-model="form_data.enable_account_creation" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable
                                                    account creation in my store</label>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <h6 class="mb-0 text-uppercase">Control Panel</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Use
                                            WYSIWYG
                                            Editor?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="editor"
                                                    v-model="form_data.editor" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, enable
                                                    the
                                                    WYSIWYG editor</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show
                                            Product
                                            Thumbnails?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="product_thumbnails"
                                                    v-model="form_data.product_thumbnails" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    product thumbnail images</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Category Settings</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Category Product
                                            List</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="category_product_list"
                                                    v-model="form_data.category_product_list" type="radio"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Show
                                                    products
                                                    from the current category only Additional information</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="default_product_sort"
                                                    v-model="form_data.default_product_sort" type="radio"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Show
                                                    products
                                                    from child categories if the current category is empty</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="product_breadcrumbs"
                                                    v-model="form_data.product_breadcrumbs" type="radio"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"> Show
                                                    products
                                                    from the current category and its children</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Default Product
                                            Sort</label>
                                        <div class="col-sm-9">
                                            <select class="form-control col-md-12 mb-3" name="default_product_sort"
                                                v-model="form_data.default_product_sort"
                                                aria-label="Default select example">
                                                <option value="">Featured Items</option>
                                                <option value="">Newest Items</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Menu Display
                                            Depth</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="menu_display_depth"
                                                v-model="form_data.menu_display_depth" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mb-0 text-uppercase">Product Settings</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            Price?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_price"
                                                    v-model="form_data.show_product_price" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's price in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            SKU?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_sku"
                                                    v-model="form_data.show_product_sku" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's SKU in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            Weight?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_weight"
                                                    v-model="form_data.show_product_weight" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's weight in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            Brand?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_brand"
                                                    v-model="form_data.show_product_brand" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's brand in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            Shipping Cost?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_shipping_cost"
                                                    v-model="form_data.show_product_shipping_cost" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's shipping cost in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Product's
                                            Rating?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_product_rating"
                                                    v-model="form_data.show_product_rating" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the product's rating in my store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Show Add to Cart
                                            Link?</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="show_add_to_cart_link"
                                                    v-model="form_data.show_add_to_cart_link" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Yes, show
                                                    the "Add to Cart" link in all the small product boxes</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Default
                                            Pre-Order Message</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="default_pre_order_message"
                                                v-model="form_data.default_pre_order_message" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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