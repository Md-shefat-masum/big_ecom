if (document.getElementById('product')) {
    const app = new Vue({
        el: '#product',
        data: function () {
            return {
                categories: [{
                        id: 1,
                        name: 'men',
                        parent: null,
                        child: [{
                                id: 2,
                                name: 't-shirt',
                                parent: 1,
                                child: [],
                            },
                            {
                                id: 3,
                                name: 'pant',
                                parent: 1,
                                child: [{
                                        id: 4,
                                        name: 'gavatin',
                                        parent: 2,
                                        child: [],
                                    },
                                    {
                                        id: 5,
                                        name: 'jeans',
                                        parent: 2,
                                        child: [],
                                    },
                                    {
                                        id: 6,
                                        name: 'touser',
                                        parent: 2,
                                        child: [{
                                                id: 7,
                                                name: 'sm',
                                                parent: 6,
                                                child: [],
                                            },
                                            {
                                                id: 8,
                                                name: 'md',
                                                parent: 6,
                                                child: [],
                                            },
                                            {
                                                id: 9,
                                                name: 'lg',
                                                parent: 6,
                                                child: [],
                                            },
                                        ]
                                    },
                                ]
                            },
                        ]
                    },
                    {
                        id: 10,
                        name: 'women',
                        parent: null,
                        child: [{
                            id: 11,
                            name: 't-shirt',
                            parent: 10,
                            child: [],
                        }, ]
                    },
                    {
                        id: 12,
                        name: 'child',
                        parent: null,
                        child: [],
                    },
                ],

                category_html: '',
                show_advance_pricing: false,

                tiers: [{
                    min_qty: 2,
                    discount: 0.00,
                    unit_price: 0,
                }],

                countries: [
                    'afganistan',
                    'america',
                    'canada',
                    'bangladesh'
                ],

                track_inventory: false,
                on_the_product_level: false,

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

                custom_fields: [{
                    name: '',
                    value: '',
                }, ],

                hs_codes: [{
                    country: '',
                    code: '',
                }, ],

                variation_permutaion: [],

                purchasability: 'can_be_purchased_in_online_store'

            }
        },
        created: function () {
            this.permutation();

            this.array_depth(this.categories);
            setTimeout(() => {
                this.add_new_form_action();
                $('.category_card_dropdown .card-body ul li ul').css('display', 'none');
            }, 300);
        },
        updated: function () {},
        methods: {
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
                                <input type="checkbox" class="form-control">
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
                    let parent_li_of_form = $(this).parent('div').parent('div').parent('li');

                    if (name.length > 0) {
                        let new_category = {
                            id: that.getRandomInt(20, 200),
                            name: name,
                            child: [],
                        }

                        // make new li
                        let new_li = `<li>
                                        <div class="element">
                                            <input type="checkbox" class="form-control">
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
                    } else {
                        $('#new_category_input_value').addClass('border border-danger');
                        $('#new_category_input_value').siblings('.alert_box').removeClass('d-none');
                        $('#new_category_input_value').siblings('.alert_box').addClass('d-block');
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
                this.tiers.push(tier);
            },

            remove_tier: function (index) {
                this.tiers.splice(index, 1);
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
                for (let index = 0; index < this.product_variants.length; index++) {
                    const element = this.product_variants[index];
                    temp_array[index] = [];
                    for (let index2 = 0; index2 < element.values.length; index2++) {
                        const element2 = element.values[index2];
                        temp_array[index].push(element2);
                    }
                }

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
        }
    });
}



if (document.getElementById('product_list')) {
    const app = new Vue({
        el: '#product_list',
    });
}

if (document.getElementById('product_option')) {
    const app = new Vue({
        el: '#product_option',
    });
}
