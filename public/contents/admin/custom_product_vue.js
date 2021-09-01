const {
    default: store
} = window.store;

// console.log(store);

if (document.getElementById('product')) {
    const app = new Vue({
        el: '#product',
        // store: store,
        data: function () {
            return {
                cart_product: {
                    name: 'producut 1',
                    id: 55,
                    price: 300,
                    qty: 5,
                    tax: 15,
                    location: 'dhaka',
                    color: 'red',
                    discount: 2,
                    coupon_code: 'big-012443',
                    user_id: 12,
                    product_info: {
                        image: '/avatar.png',
                        sku: 'sku_123',
                    }
                },

                id: '',
                product_name: '',
                sku: '',
                product_type: '',
                default_price: '',

                brands: [],
                brand_id: '',

                weight: '',

                selected_categories: [],

                description: '',
                product_image: [],
                related_image: [],

                product_identifier_sku: '',
                manufacture_part_number: '',
                product_upc: '',
                global_trade_number: '',
                bin_picking_number: '',

                pricing_default_price: '',
                tax_class: '',
                tax_provider_tax_code: '',
                cost: '',
                msrp: '',
                sales_price: '',
                bulk_pricing_discount_type: '',
                bulk_pricing_discount_options: [{
                        min_quantity: 2,
                        discount: 0,
                        unit_price: 0,
                    },
                    {
                        min_quantity: 4,
                        discount: 0,
                        unit_price: 0,
                    },
                ],

                track_inventory: true,
                on_the_product_level: true,

                track_inventory_on_the_variant_level_stock: 0,
                track_inventory_on_the_variant_level_low_stock: 0,

                set_as_store_front: true,

                search_keywords: '',
                sort_order: '',
                template_layout_file: '',
                waranty_information: '',
                availability_text: '',
                product_condition: '',
                conditions: [
                    'new',
                    'used',
                    'refurbished',
                ],
                show_condition_on_storefront: false,

                custom_fields: [{
                    name: '',
                    value: '',
                }, ],

                automatically_show_related_prodauct_on_my_store_front: true,
                related_products: [],

                weight: '',
                width: '',
                height: '',
                depth: '',

                fixed_shipping_price: 0,
                free_shipping: false,

                categories: [],
                selected_categories: [],
                related_categories: [],

                category_html: '',
                show_advance_pricing: false,

                purchasability: 'can_be_purchased_in_online_store',
                preorder_message: '',
                release_date: '',
                remove_pre_order_status_on_this_date: false,

                show_call_for_pricing: true,
                call_number: '',

                minimum_purchase_quantity: '',
                maximum_purchase_quantity: '',

                gift_wrapping: false,

                manage_customs_information: false,
                countries: [
                    'afganistan',
                    'america',
                    'canada',
                    'bangladesh'
                ],
                country_of_origin: '',
                comodity_description: '',
                hs_codes: [{
                    country: '',
                    code: '',
                }, ],

                page_title: '',
                product_url: '',
                meta_description: '',

                open_graph_sharing_object_type: '',
                open_graph_use_product_name: false,
                open_graph_use_product_description: false,
                open_graph_use_thumbnail_image: true,
                open_graph_dont_use_an_image: false,

                edit_columns_lists: [{
                        id: 1,
                        name: 'purchasable',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'Image',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'Variant (Read-only)',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'SKU',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'Default Price',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'Sale Price',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'MSRP',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Stock',
                        checked: true,
                    },
                    {
                        id: 1,
                        name: 'Low Stock',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Weight (KGS)',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Width (Centimeters)',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Height (Centimeters)',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Depth (Centimeters)',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Cost',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'UPC/EAN',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'Bin Picking Number',
                        checked: false,
                    },
                    {
                        id: 1,
                        name: 'MPN',
                        checked: false,
                    },
                ],

                shared_variant_options: [],
                selected_variant_options: [],
                show_add_variant_option: true,
                product_variants: [{
                        name: 'size',
                        type: 'Dropdown',
                        values: [
                            'Small',
                            "medium",
                        ],
                    },
                    {
                        name: 'color',
                        type: 'Dropdown',
                        values: [
                            'Red',
                        ],
                    },
                    {
                        name: 'unit',
                        type: 'Dropdown',
                        values: [
                            'kg',
                        ],
                    },
                ],
                variation_permutaion: [],
                variant_values: [],

                modifier_options: [],
            }
        },
        created: function () {
            this.get_categories_tree_json();
            this.get_shared_variant_options();
            this.get_all_brands();

            if(location.pathname.split('/')[4] && parseInt(location.pathname.split('/')[4]) > 0){
                this.id = parseInt(location.pathname.split('/')[4]);
                this.get_product(this.id);
            }

            let that = this;
            $(function(){
                $('#upload_image').on('change', function() {
                    $('.gallery').html('');
                    that.imagesPreview(this, 'div.gallery');
                });
            })
        },
        updated: function () {},
        watch: {
            selected_variant_options: {
                handler: function (val, old_val) {
                    this.permutation();
                },
                deep: true,
            },
            product_name: {
                handler: function (val, old_val) {
                    // this.permutation();

                    this.page_title = this.product_name;
                    this.meta_description = this.product_name;
                    this.product_url = this.product_name.replaceAll(' ','-').toLowerCase();

                    this.search_keywords = this.search_keywords || '';
                    this.search_keywords = this.search_keywords && this.search_keywords.replaceAll(this.product_name,'');
                    this.search_keywords += ( this.product_name + ',');

                },
                deep: true,
            },
        },
        methods: {
            // ...window.action([
            //     'fetch_category_info',
            // ]),
            get_product: function(id){

                axios.get('/admin/product/get-json/'+id)
                    .then((res)=>{
                        console.log(res.data.product);

                        let product = res.data.product;
                        for (const key in product) {
                            if (Object.hasOwnProperty.call(product, key)) {
                                const element = product[key];

                                if(Object.hasOwnProperty.call(this.$data, key)){
                                    if(key == 'custom_fields'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'hs_codes'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'bulk_pricing_discount_options'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'modifier_options'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'selected_variant_options'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'selected_categories'){
                                        this.$data[key] = JSON.parse(element);
                                    }
                                    else if(key == 'description'){
                                        $('#mytextarea1').summernote('code',element)
                                    }
                                    else{
                                        if(key == 'custom_fields'){
                                            console.log({manage_customs_information:element});
                                        }
                                        this.$data[key] = element;
                                    }
                                }
                                // console.log({[key]:element});
                                if(key == 'custom_information'){
                                    this.$data['manage_customs_information'] = element;
                                }
                                if(key == 'variant_values_json'){
                                    this.$data['variant_values'] = element;
                                }
                            }


                        }
                        // console.log(this.$data);
                        setTimeout(() => {
                            this.load_variant_values();

                            let category_checkbox = $(`.category_block input[type="checkbox"]`);
                            let categories = this.selected_categories;

                            for (let index = 0; index < category_checkbox.length; index++) {
                                const element = category_checkbox[index];
                                if(typeof element == 'object'){
                                    if(element.type == 'checkbox' && categories.includes(parseInt(element.value))){
                                        $(element).parents('ul').css('display','block');
                                        element.checked = true;
                                    }
                                }
                            }
                            this.draw_left_line();
                        }, 2000);
                    })
            },

            store_product: function () {
                let form_data = new FormData($('#product_insert_form')[0]);
                form_data.append('description', $('#mytextarea1').summernote('code'));
                form_data.append('selected_categories', JSON.stringify(this.selected_categories));
                form_data.append('bulk_pricing_discount_options', JSON.stringify(this.bulk_pricing_discount_options));
                form_data.append('selected_variant_options', JSON.stringify(this.selected_variant_options));
                form_data.append('modifier_options', JSON.stringify(this.modifier_options));
                form_data.append('custom_fields', JSON.stringify(this.custom_fields));
                form_data.append('hs_codes', JSON.stringify(this.hs_codes));

                axios.post('/admin/product/store-product', form_data)
                    .then((res) => {
                        // console.log(res.data);
                        toaster('success', 'data Inserted');
                        window.location.reload();
                    })
            },

            update_product: function () {
                let form_data = new FormData($('#product_insert_form')[0]);
                form_data.append('id', this.id);
                form_data.append('description', $('#mytextarea1').summernote('code'));
                form_data.append('selected_categories', JSON.stringify(this.selected_categories));
                form_data.append('bulk_pricing_discount_options', JSON.stringify(this.bulk_pricing_discount_options));
                form_data.append('selected_variant_options', JSON.stringify(this.selected_variant_options));
                form_data.append('modifier_options', JSON.stringify(this.modifier_options));
                form_data.append('custom_fields', JSON.stringify(this.custom_fields));
                form_data.append('hs_codes', JSON.stringify(this.hs_codes));

                axios.post('/admin/product/update-product', form_data)
                    .then((res) => {
                        // console.log(res.data);
                        toaster('success', 'data updated');
                        window.location.reload();
                    })
            },

            get_all_brands: function () {
                axios.get('/admin/product/brands-json')
                    .then((res) => {
                        this.brands = res.data;
                        this.brand_id = this.brands.length>0?this.brands[0].id:'';
                    })
            },

            add_new_modifier_option: function () {
                let temp_option = {
                    name: '',
                    required: false,
                    type: 'text-field',
                    default_value: '',
                };
                this.modifier_options.push(temp_option);
            },

            remove_modifier_option: function (index) {
                this.modifier_options.splice(index, 1);
            },

            check_duplicate_modifier_option: function () {
                $("#modifierOptionModal input[type=text].modifier_name").each(function () {
                    // that.selected_categories.push(parseInt($(this).val()));
                    // console.log($(this).val());
                    let input_element = $(this);
                    let value = $(this).val();
                    let check_blank = true;

                    if (value == null || value == '' || value == undefined) {
                        check_blank = false;
                        $(this).addClass('border border-danger');
                        $(this).parent('.text-input').addClass('text_danger');
                        toaster('danger', 'fill up required area');
                    } else {
                        $("#modifierOptionModal").modal('hide');
                    }

                    // var classList = $(this).attr('class').split(/\s+/);
                    // $.each(classList, function (index, item) {
                    //     if (item === 'variant_option_name') {
                    //         check_duplicate = that.check_duplicate_option($(this)[0], value);
                    //         input_element.addClass('border');
                    //         input_element.addClass('border-warning');
                    //         // console.log(check_duplicate, input_element, item, classList);
                    //     }
                    // });

                });
            },

            imagesPreview : function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img style="width: 50px;height:50;margin:2px;border:1px solid white;padding:2px;border-radius:3px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }

            },

            get_shared_variant_options: function () {
                axios.get('/admin/product/option_json')
                    .then((res) => {
                        this.shared_variant_options = res.data;
                    })
            },

            add_option_to_selected_variant_options: function (option) {
                this.selected_variant_options = this.selected_variant_options.filter((item) => item.id != option.id);
                this.selected_variant_options.push(option);
                // console.log(this.selected_variant_options);
            },

            reset_selected_variant_options: function () {
                this.selected_variant_options = [];
                $('#varientModal').modal('hide');
            },

            save_selected_variant_options: function () {
                // this.selected_variant_options ;
                let check_blank = true;
                let check_duplicate = true;
                let that = this;
                $("#varientModal input[type=text]").each(function () {
                    // that.selected_categories.push(parseInt($(this).val()));
                    // console.log($(this).val());
                    let input_element = $(this);
                    let value = $(this).val();
                    if (value == null || value == '' || value == undefined) {
                        check_blank = false;
                        $(this).addClass('border border-danger');
                        $(this).parent('.text-input').addClass('text_danger');
                    }

                    var classList = $(this).attr('class').split(/\s+/);
                    $.each(classList, function (index, item) {
                        if (item === 'variant_option_name') {
                            check_duplicate = that.check_duplicate_option($(this)[0], value);
                            input_element.addClass('border');
                            input_element.addClass('border-warning');
                            // console.log(check_duplicate, input_element, item, classList);
                        }
                    });

                });

                if (check_blank == false) {
                    toaster('error', 'fill up all required fields');
                } else {

                    if (check_duplicate) {
                        $('#varientModal').modal('hide');
                    }
                }
            },

            focus_required_variation: function (event, item) {
                this.check_duplicate_option(event.target, item);

                if (item.length > 0) {
                    $(event.target).removeClass('border');
                    $(event.target).removeClass('border-danger');
                    $(event.target).parent('.text-input').removeClass('text_danger');
                }
            },

            check_duplicate_option: function (event, item) {
                let names = [];
                $("#varientModal input[type=text].variant_option_name").each(function () {
                    let value = $(this).val();
                    if (value.length > 0) {
                        names.push(value);
                    }
                });

                let match = 0;
                names.map((temp_item) => {
                    if (temp_item == item) {
                        return match++;
                    }
                });

                if (match > 1) {
                    $(event).addClass('border');
                    $(event).addClass('border-warning');
                    toaster('warning', 'name is exists');
                    return false;
                }

                return true;
            },

            add_new_variant_option: function () {
                let new_option = {
                    id: this.getRandomInt(10000, 99999),
                    display_name: "",
                    unique_name: "",
                    type: "dropdown",
                    option_values_json: [{
                        name: '',
                        default: false,
                        color_limit: 3,
                        colors: {
                            one_color: "#000000",
                            two_color: "#000000",
                            three_color: "#000000",
                        }
                    }]
                };
                this.selected_variant_options.push(new_option);
                this.show_add_variant_option = true;
                // console.log(new_option);
            },

            add_variant_new_value: function (item) {
                // console.log(item);
                let new_value = {
                    name: '',
                    default: false,
                    color_limit: 3,
                    colors: {
                        one_color: "#000000",
                        two_color: "#000000",
                        three_color: "#000000",
                    }
                };

                item.option_values_json.push(new_value);
            },

            remove_selected_variant: function (index) {
                this.selected_variant_options.splice(index, 1);
            },

            remove_selected_variant_value: function (item_index, value_index) {
                this.selected_variant_options[item_index].option_values_json.splice(value_index, 1);
            },

            load_variant_values: function(){
                // console.log(this.variant_values);
                let variant_values = this.variant_values;
                let selector = '';
                for (const varient_name in variant_values) {
                    if (Object.hasOwnProperty.call(variant_values, varient_name)) {
                        const varient_permutations = variant_values[varient_name];

                        // console.log(varient_name);

                        for (const single_varient in varient_permutations) {
                            if (Object.hasOwnProperty.call(varient_permutations, single_varient)) {
                                const single_varient_value = varient_permutations[single_varient];

                                // let selector = variant_values[blue,_sm][sku][]
                                selector = `variant_values[${varient_name}][${single_varient}][]`;

                                // console.log(selector);
                                // console.log({[single_varient]: single_varient_value[0]});

                                $(`input[name="${selector}"]`).val(single_varient_value[0]);

                                if($(`input[name="${selector}"]`)[0].type == 'checkbox'){
                                    if(single_varient_value[0]){
                                        $(`input[name="${selector}"]`)[0].checked = true;
                                    }
                                }
                                // $(`input[name="variant_values[blue,_sm][purchasable][]"]`).val("test");
                                // console.log(selector);
                            }
                        }

                    }
                }
            },

            get_categories_tree_json: function () {
                axios.get('/admin/product/categories_tree_json')
                    .then((res) => {
                        // console.log(res.data);
                        this.categories = res.data;
                        this.array_depth(this.categories);

                        setTimeout(() => {
                            this.add_new_form_action();
                            $('.category_card_dropdown .card-body ul li ul').css('display', 'none');
                        }, 300);
                    })
            },

            array_depth: function (arr) {
                // console.log(arr);
                if (arr.length > 0) {
                    // this.category_html += `<ul style="${arr[0].parent == null ? 'display:block;' : 'display:none;'}">`;
                    this.category_html += `<ul>`;
                    this.category_html += '<span class="left_line"></span>';

                    for (let index = 0; index < arr.length; index++) {
                        const element = arr[index];
                        this.category_html += '<li>';
                        this.category_html += `
                            <div class="element">
                                <input type="checkbox" value="${element.id}" class="form-control">
                                <i class="fa fa-folder"></i>
                                <div>${element.name}</div>
                                <div data-id="${element.id}" class="add_sub_category">
                                    <a href="#">
                                        <i class="fa fa-plus"></i> Add sub-category
                                    </a>
                                </div>
                        `;
                        if (element.child !== undefined) {
                            this.category_html += `<div class="parent_element_trigger ${element.child.length > 0 ? ' d-block ' : ' d-none '}">
                                                        <i data-action="expand" class="fa fa-plus show_plus"></i>
                                                        <i data-action="collapse" class="fa fa-minus hide_plus"></i>
                                                    </div>`;
                        }

                        this.category_html += `</div>`;

                        if (element.child !== undefined) {
                            this.array_depth(element.child);
                        }

                        this.category_html += '</li>';
                    }

                    this.category_html += '</ul>';
                }
            },

            add_new_form_action: function () {
                let that = this;
                $('.add_sub_category').off().on('click', function () {
                    let ul = $(this).parent('div').parent('li').children('ul');
                    let sibling_element_trigger = $(this).siblings('.parent_element_trigger');
                    let id = $(this).data('id');

                    let element_2_ul_li_length = $('.element2').parent('li').parent('ul').children('li').length;
                    if (element_2_ul_li_length == 1) {
                        $('.element2').parent('li').parent('ul').remove();
                    } else {
                        $('.element2').parent('li').remove();
                        $('.element2').remove();
                    }

                    if (ul.length > 0) {
                        $(ul).css('display', 'block');
                        // console.log(sibling_element_trigger);
                        $(sibling_element_trigger).children('.fa-plus').removeClass('show_plus')
                        $(sibling_element_trigger).children('.fa-plus').addClass('hide_plus')

                        $(sibling_element_trigger).children('.fa-minus').removeClass('hide_plus')
                        $(sibling_element_trigger).children('.fa-minus').addClass('show_plus')

                        if (!$('.element2')[0]) {
                            let li = `<li>
                                        <div class="element element2">
                                            <div class="new_category_form_body">
                                                <input data-id="${id}" id="new_category_input_value" class="form-control new_category_form"/>
                                                <span class="d-none text-danger alert_box">Please provide a name</span>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-outline-danger cancel_element_2">Cancel</button>
                                                <button class="btn btn-info" id="new_cateogry_input_submit">Done</button>
                                            </div>
                                        </div>
                                    </li>`;
                            $(ul).append(li);
                            that.init_cancel_element_2();
                            that.init_new_cateogry_input_submit();
                            $('#new_category_input_value').focus();
                        } else {
                            $('#new_category_input_value').focus();
                        }
                    } else {
                        let li = $(this).parent('div').parent('li');
                        if (!$('.element2')[0]) {
                            let ul = `<ul>
                                        <span class="left_line"></span>
                                        <li>
                                            <div class="element element2">
                                                <div class="new_category_form_body">
                                                    <input data-id="${id}" id="new_category_input_value" class="form-control new_category_form"/>
                                                    <span class="d-none text-danger alert_box">Please provide a name</span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-outline-danger cancel_element_2" data-remove_with="ul">Cancel</button>
                                                    <button class="btn btn-info" id="new_cateogry_input_submit">Done</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>`;
                            $(li).append(ul);
                            that.init_cancel_element_2();
                            that.init_new_cateogry_input_submit();
                            $('#new_category_input_value').focus();
                        } else {
                            $('#new_category_input_value').focus()
                        }
                    }

                    that.draw_left_line();
                    // console.log(ul);
                });

                $('.parent_element_trigger i').off().on('click', function () {
                    let action = $(this).data('action');
                    let target = $(this).parent('div').parent('div').parent('li').children('ul');

                    if (action == 'collapse') {
                        $(target).hide();
                        $(this).siblings('.fa-plus').addClass('show_plus');
                        $(this).siblings('.fa-plus').removeClass('hide_plus');
                        $(this).removeClass('show_plus');
                        $(this).addClass('hide_plus');
                        that.draw_left_line();
                    }

                    if (action == 'expand') {
                        $(target).show();
                        $(this).siblings('.fa-minus').addClass('show_plus');
                        $(this).siblings('.fa-minus').removeClass('hide_plus');
                        $(this).removeClass('show_plus');
                        $(this).addClass('hide_plus');
                        that.draw_left_line();
                    }
                    // console.log(action);
                });

                $(".category_block input[type=checkbox]").on('change', function () {
                    that.selected_categories = [];
                    $(".category_block input[type=checkbox]:checked").each(function () {
                        that.selected_categories.push(parseInt($(this).val()));
                    });
                })

                that.draw_left_line();
            },

            draw_left_line: function () {
                let uls = $('.category_card_dropdown ul');
                for (let index = 0; index < uls.length; index++) {
                    const element = uls[index];
                    let height = 0;
                    for (let index1 = 1; index1 < $(element)[0].children.length - 1; index1++) {
                        const element2 = element.children[index1];
                        height += $(element2).height();
                    }
                    // console.log(height);
                    $(element).children('.left_line').css('height', height + 48)
                }
            },

            init_cancel_element_2: function () {
                let that = this;
                $('.cancel_element_2').off().on('click', function (e) {
                    e.preventDefault();
                    let target = $(this).data('remove_with');

                    if (target == 'ul') {
                        $(this).parent('div').parent('.element2').parent('li').parent('ul').remove();
                    } else {
                        $(this).parent('div').parent('.element2').parent('li').remove();
                    }
                    that.draw_left_line();
                })
            },

            init_new_cateogry_input_submit: function () {
                let that = this;

                $('#new_cateogry_input_submit').off().on('click', function (e) {
                    e.preventDefault();
                    let parent_id = $('#new_category_input_value').data('id');
                    let name = $('#new_category_input_value').val();
                    let root_li_triggers = $(this).parent('div').parent('div').parent('li').parent('ul').parent('li').children('div').children('.parent_element_trigger');
                    let parent_ul_of_form = $(this).parent('div').parent('div').parent('li').parent('ul');
                    let parent_li_of_ul = $(this).parent('div').parent('div').parent('li').parent('ul').parent('li');
                    let parent_li_of_form = $(this).parent('div').parent('div').parent('li');

                    $(parent_li_of_ul).addClass('preloader_in_li');
                    $(parent_li_of_ul).append('<span class="preloader_body"></span>');

                    if (name.length > 0) {
                        let new_category = {
                            id: that.getRandomInt(20, 200),
                            name: name,
                            parent: parent_id,
                            child: [],
                        }

                        axios.post('/admin/product/store-category-from-product-create', new_category)
                            .then((res) => {

                                new_category.id = res.data.id;

                                // make new li
                                let new_li = `<li>
                                                <div class="element">
                                                    <input type="checkbox" value="${new_category.id}" class="form-control">
                                                    <i class="fa fa-folder"></i>
                                                    <div>${name}</div>
                                                    <div data-id="${new_category.id}" class="add_sub_category">
                                                        <a href="#">
                                                            <i class="fa fa-plus"></i> Add sub-category
                                                        </a>
                                                    </div>
                                                    <div class="parent_element_trigger  d-none ">
                                                        <i data-action="expand" class="fa fa-plus hide_plus"></i>
                                                        <i data-action="collapse" class="fa fa-minus show_plus"></i>
                                                    </div>
                                                </div>
                                            </li>`;

                                // new category_append
                                $(parent_ul_of_form).append(new_li);

                                // new add form remove
                                $(parent_li_of_form).remove();

                                // d-block triggers
                                $(root_li_triggers).removeClass('d-none');
                                $(root_li_triggers).addClass('d-block');

                                // add new category in category array
                                that.add_new_category_to_parent_category(that.categories, parent_id, new_category);
                                that.draw_left_line();

                                $(parent_li_of_ul).removeClass('preloader_in_li');
                                $('.preloader_body').remove();
                            })

                    } else {
                        $('#new_category_input_value').addClass('border border-danger');
                        $('#new_category_input_value').siblings('.alert_box').removeClass('d-none');
                        $('#new_category_input_value').siblings('.alert_box').addClass('d-block');

                        $(parent_li_of_ul).removeClass('preloader_in_li');
                        $('.preloader_body').remove();
                    }

                    // console.log(parent_id, name, new_category);
                })
            },

            getRandomInt: function (min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
            },

            add_new_category_to_parent_category: function (arr, parent_id, new_category) {
                for (let index = 0; index < arr.length; index++) {
                    const element = arr[index];
                    if (element.id == parent_id) {
                        // this.category_html = '';
                        element.child.push(new_category);

                        // console.log(new_category);
                        // re render category html
                        // this.array_depth(this.categories);

                        setTimeout(() => {
                            this.add_new_form_action();
                        }, 300);
                        break;
                    }
                    if (element.child !== undefined) {
                        this.add_new_category_to_parent_category(element.child, parent_id, new_category);
                    }
                }
            },

            add_tier: function () {
                let tier = {
                    min_qty: 2,
                    discount: 0.00,
                    unit_price: 0,
                };
                this.bulk_pricing_discount_options.push(tier);
            },

            remove_tier: function (index) {
                this.bulk_pricing_discount_options.splice(index, 1);
            },

            checked_edit_column: function (column) {
                // console.log(column);
                column.checked = !column.checked;
            },

            permute: function (permutation) {
                var length = permutation.length,
                    result = [permutation.slice()],
                    c = new Array(length).fill(0),
                    i = 1,
                    k, p;

                console.log(result, c);

                // while (i < length) {
                //     if (c[i] < i) {
                //         k = i % 2 && c[i];
                //         p = permutation[i];
                //         permutation[i] = permutation[k];
                //         permutation[k] = p;
                //         ++c[i];
                //         i = 1;
                //         result.push(permutation.slice());
                //     } else {
                //         c[i] = 0;
                //         ++i;
                //     }
                // }
                // return result;
            },

            permutation: function () {
                let temp_array = [];
                let results = [];
                this.variation_permutaion = [];

                for (let index = 0; index < this.selected_variant_options.length; index++) {
                    const element = this.selected_variant_options[index];
                    temp_array[index] = [];
                    for (let index2 = 0; index2 < element.option_values_json.length; index2++) {
                        const element2 = element.option_values_json[index2].name;
                        temp_array[index].push(element2);
                    }
                }

                // console.log(temp_array);
                // this.variation_permutaion = temp_array;

                for (let index = 0; index < temp_array.length; index++) {
                    const values = temp_array[index];

                    if (results.length == 0) {
                        results = values;
                    } else {
                        let new_results = [];
                        for (let index2 = 0; index2 < results.length; index2++) {
                            const result = results[index2];

                            for (let index3 = 0; index3 < values.length; index3++) {
                                const value = values[index3];
                                new_results.push(result + ', ' + value);
                            }
                        }

                        this.variation_permutaion = results = new_results;
                    }
                }

                if (this.variation_permutaion.length == 0) {
                    this.variation_permutaion = temp_array[0];
                }

                // for (let index = 0; index < results.length; index++) {
                //     const element = results[index];
                //     console.log(element);
                // }
            },

            add_custom_field: function () {
                let custom = {
                    name: '',
                    value: '',
                };
                this.custom_fields.push(custom);
            },

            remove_custom_field: function (index) {
                this.custom_fields.splice(index, 1);
            },

            add_hs_code: function () {
                let custom = {
                    country: '',
                    code: '',
                };
                this.hs_codes.push(custom);
            },

            remove_hs_code: function (index) {
                this.hs_codes.splice(index, 1);
            },
        },
        computed: {
            // ...window.getters([
            //     'get_auth_info',
            // ]),
        }
    });
}


if (document.getElementById('product_option')) {
    const app = new Vue({
        el: '#product_option',
        store: store,
        data: function () {
            return {
                form_type: 'create',
                id: '',
                change_unique_name_onece: false,
                unique_name_check: false,
                display_name: '',
                variant_option_name: '',
                type: 'dropdown',
                option_values: [{
                    name: '',
                    default: false,
                    color_limit: 3,
                    colors: {
                        one_color: "#000000",
                        two_color: "#000000",
                        three_color: "#000000",
                    }
                }]
            };
        },
        watch: {
            display_name: {
                handler: function (val) {
                    this.variant_option_name = this.display_name;
                }
            },
            variant_option_name: {
                handler: function (val) {
                    if (location.pathname.split('/')[4]) {
                        if (this.change_unique_name_onece) {
                            this.check_option_exists();
                        }
                        this.change_unique_name_onece = true;
                    } else {
                        this.check_option_exists();
                    }
                }
            }
        },
        created: function () {
            let that = this;
            $(function () {
                that.init_sortable();
            })
            this.get_option();
        },
        methods: {
            init_sortable: function () {
                if (document.getElementById('sortable')) {
                    $("#sortable").off().sortable();
                }
            },
            get_option: function () {
                if (location.pathname.split('/')[4]) {

                    axios.get('/admin/product/get-option/' + location.pathname.split('/')[4])
                        .then((res) => {
                            // this.form_data = res.data;
                            // console.log(res.data);
                            this.form_type = 'edit';
                            this.id = res.data.id;
                            this.unique_name_check = false;
                            this.display_name = res.data.display_name;
                            this.variant_option_name = res.data.unique_name;
                            this.type = res.data.type;
                            this.option_values = res.data.option_values_json;
                        })
                }

            },
            add_option: function () {
                let option_value = {
                    name: '',
                    default: false,
                    color_limit: 3,
                    colors: {
                        one_color: "#000000",
                        two_color: "#000000",
                        three_color: "#000000",
                    }
                };
                this.option_values.push(option_value);
            },
            remove_option: function (index) {
                this.option_values.splice(index, 1);
            },
            create_option: function () {
                let form_data = new FormData($('#create_option_form')[0]);
                form_data.append('option_values', JSON.stringify(this.option_values));
                axios.post('/admin/product/store-option', form_data)
                    .then(res => {
                        // console.log(res.data);
                        // return res.data;
                        toaster('success', 'data updated');
                        window.location.reload();
                    })
            },
            update_option: function () {
                let form_data = new FormData($('#create_option_form')[0]);
                form_data.append('option_values', JSON.stringify(this.option_values));
                form_data.append('id', JSON.stringify(this.id));
                axios.post('/admin/product/update-option', form_data)
                    .then(res => {
                        // console.log(res.data);
                        // return res.data;
                        toaster('success', 'data updated');

                    })
            },
            check_option_exists: function () {
                axios.post('/admin/product/check_option_exists', {
                        form_type: this.form_type,
                        id: this.id,
                        display_name: this.display_name,
                        unique_name: this.variant_option_name
                    })
                    .then((res) => {
                        // console.log(res.data);
                        this.unique_name_check = res.data;
                        if (this.unique_name_check == 1) {
                            console.log(this.unique_name_check);
                            $('.variant_option_name').addClass('border');
                            $('.variant_option_name').addClass('border-danger');
                        } else {
                            $('.variant_option_name').removeClass('border');
                            $('.variant_option_name').removeClass('border-danger');
                            this.unique_name_check = 0;
                        }
                    })
            },
            set_default: function (index) {
                console.log(index);
                let temp_options = [...this.option_values];
                temp_options.map((item) => item.default = false);
                temp_options[index].default = true;
                this.option_values = temp_options;
            }
        }
    });
}

if (document.getElementById('category_form')) {
    const app = new Vue({
        el: '#category_form',
        // store: store,
        data: function () {
            return {
                category_serial: 0,
                form_data: {
                    id: null,
                    name: null,
                    url: null,
                    description: null,
                    parent_category: null,
                    template_layout_file: null,
                    sort_order: null,
                    default_product_sort: null,
                    category_image: null,
                    page_title: null,
                    meta_keywords: null,
                    meta_description: null,
                    search_keywords: null,
                },
                url_exists: false,
            }
        },
        created: function () {
            // this.get_cateogry();
            this.init_category_tree_view();
            console.log(
                // this.$store.default.state,
                // this.$store.default.commit('test_mutation'),
                // this.$store.default.dispatch('fetch_auth_info'),

                // this.test_mutation(),
                // this.fetch_category_info(),
            );
        },
        methods: {
            // ...window.mutation(['test_mutation']),
            // ...window.action(['fetch_category_info']),
            get_cateogry: function () {
                if (location.pathname.split('/')[4]) {
                    axios.get('/admin/product/edit-data/' + location.pathname.split('/')[4])
                        .then((res) => {
                            this.form_data = res.data;
                        })
                }
            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                form_datas.append('description', $('#mytextarea1').summernote('code'));

                if (this.url_exists) {
                    toaster('error', 'url already exists.');
                    $(`input[name="url"]`).focus();
                } else {
                    axios.post('/admin/product/store-category', form_datas)
                        .then((res) => {
                            // console.log(res.data);
                            $('#treeview').html(res.data.category_tree_view);
                            this.init_category_tree_view();
                            $('#form_body').trigger('reset')
                            $('#mytextarea1').summernote('reset');
                            $(`input[name="name"]`).focus();
                            toaster('success', 'new category created.');
                        })
                        .catch((err) => {
                            // console.log(err.response);
                            let errors = err.response.data.errors;
                            for (const key in errors) {
                                if (Object.hasOwnProperty.call(errors, key)) {
                                    const element = errors[key];
                                    $(`input[name="${key}"]`).addClass('border');
                                    $(`input[name="${key}"]`).addClass('border-danger');
                                    let span = `<span class="text-danger d-block">${element}</span>`;
                                    $(`input[name="${key}"]`).parent('div').append(span);
                                    $(`input[name="${key}"]`).focus();

                                    if (key == 'url') {
                                        toaster('error', 'url not valid');
                                    }
                                }
                            }
                        })
                }

            },
            update: function () {
                let form_datas = new FormData($('#form_body')[0]);
                form_datas.append('description', $('#mytextarea1').summernote('code'));

                if (this.url_exists) {
                    toaster('error', 'url already exists.');
                    $(`input[name="url"]`).focus();
                } else {
                    axios.post('/admin/product/update-category', form_datas)
                        .then((res) => {
                            $('#treeview').html(res.data.category_tree_view);
                            this.init_category_tree_view();
                            toaster('success', 'Category Updated.');
                        })
                        .catch((err) => {
                            // console.log(err.response);
                            let errors = err.response.data.errors;
                            for (const key in errors) {
                                if (Object.hasOwnProperty.call(errors, key)) {
                                    const element = errors[key];
                                    $(`input[name="${key}"]`).addClass('border');
                                    $(`input[name="${key}"]`).addClass('border-danger');
                                    let span = `<span class="text-danger d-block">${element}</span>`;
                                    $(`input[name="${key}"]`).parent('div').append(span);
                                    $(`input[name="${key}"]`).focus();

                                    if (key == 'url') {
                                        toaster('error', 'url not valid');
                                    }
                                }
                            }
                        })
                }

            },
            check_url_exists: function (url) {
                axios.post('/admin/product/categorie-url-check', {
                        url: url,
                        id: this.form_data.id
                    })
                    .then((res) => {
                        // console.log(res.data);
                        this.url_exists = res.data;
                        if (res.data) {
                            console.log(res);
                            $(`input[name="url"]`).addClass('border');
                            $(`input[name="url"]`).addClass('border-danger');
                            let span = `<span class="text-danger d-block">url exists , try another</span>`;
                            $(`input[name="url"]`).parent('div').children('span').remove();
                            $(`input[name="url"]`).parent('div').append(span);
                        } else {
                            $(`input[name="url"]`).removeClass('border');
                            $(`input[name="url"]`).removeClass('border-danger');
                            $(`input[name="url"]`).parent('div').children('span').remove();
                        }
                    })
            },
            make_url: function () {
                this.form_data.url = this.form_data.name;
                this.form_data.url = '/' + this.make_slug(this.form_data.url);
                this.check_url_exists(this.form_data.url);
            },
            change_url: function () {
                this.form_data.url = (this.form_data.url).replaceAll('/', '');
                this.form_data.url = '/' + this.make_slug(this.form_data.url);
                this.check_url_exists(this.form_data.url);
            },
            make_slug: function (str) {
                //replace all special characters | symbols with a space
                str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

                // trim spaces at start and end of string
                str = str.replace(/^\s+|\s+$/gm, '');

                // replace space with dash/hyphen
                str = str.replace(/\s+/g, '-');
                return str;

            },
            init_category_tree_view: function () {
                setTimeout(() => {
                    $("#treeview").hummingbird();
                    $("#treeview li").off().on('click', function () {})
                    $("#treeview li input").off().on('click', function () {})
                    $("#treeview li label").off().on('click', function () {})
                }, 300);
            }
        },
        // computed: {
        //     ...window.getters(['get_check_auth']),
        // }
    });
}
