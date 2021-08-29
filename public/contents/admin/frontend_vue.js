const {
    default: store
} = window.store;

if (document.getElementById('frontend_account')) {

    const app = new Vue({
        el: '#frontend_account',
        // store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    first_name: null,
                    last_name: null,
                    username: null,
                    role_id: null,
                    email: null,
                    phone: null,
                    password: null,
                },
            }
        },
        created: function () {
            this.getSetting();
        },
        methods: {
            getSetting: function () {

                axios.get('/get-account')
                    .then(res => {
                        console.log(res.data);
                        this.form_data = res.data;
                    })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/edit-account', form_datas)
                    .then((res) => {
                        console.log(res.data);
                        // this.form_datas.clear();
                        toaster('success', 'Successful.');
                    })
                    .catch((err) => {
                        // console.log(err.response);
                        let errors = err.response.data.errors;
                    })
            },


        },
    });
}

if (document.getElementById('product_list')) {
    // alert('ok');
    const app = new Vue({
        el: '#product_list',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    product_id: null,
                },
                price_range: '',
                product_list: {},
                image_list: {},
                limit: 9,
                home_category: {},
                // selected_product_for_modal : null,
            }
        },
        created: function () {
            this.getProduct();
            // this.getProductImage();
            this.init_jquery();
            this.filter_products();
            this.getProductFilter();
            this.getHomeCat();
            // this.getCatroduct();
        },
        methods: {
            ...window.mutation([
                'add_selected_product_for_quick_view',
                'add_selected_product_for_cart',

            ]),
            getHomeCat: function () {

                axios.get('/menu-category')
                    .then(res => {
                        // console.log(res.data);
                        this.home_category = res.data;
                    })

            },
            getCatLimit: function () {
                if(this.limit==9){
                    this.limit=100;
                }else{
                    this.limit=9;
                }
            },

            getProduct: function () {

                axios.get('/get-product')
                    .then(res => {
                        console.log(res.data);
                        this.product_list = res.data;
                    })

            },
            // getProductImage: function () {

            //     axios.get('/get-product-image')
            //         .then(res => {
            //             console.log(res.data);
            //             this.image_list = res.data;
            //         })

            // },
            init_jquery: function () {
                let min_price = 0;
                let max_price = 0;
                $.get('/json-min-max-price', function (res) {
                    // console.log(res.data);
                    min_price = parseInt(res.min_price);
                    max_price = parseInt(res.max_price);

                    $("#slider-range").slider({
                        range: true,
                        min: min_price,
                        max: max_price,
                        values: [min_price, max_price],
                        slide: function (event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });
                    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
                    // let range = $('#amount').val();
                    // axios.get('/json-min-max-price?range='+range)
                    //     .then((res)=>{
                    //         console.log(res.data);
                    //     })

                });


            },
            getProductFilter: function () {

                axios.get('/json-min-max-price')
                    .then(res => {
                        // console.log(res.data);
                        this.price_range = res.data;
                    })

            },
            filter_products: function () {
                // console.log(this.price_range, $('#amount').val());
                let range = $('#amount').val();
                let range_s = range.replace(/\$/g, '');
                // let range_ss= range_s.replace('-','');
                // range_ss.split(" ");
                let min = parseInt(range_s.split("-")['0']);
                let max = parseInt(range_s.split("-")['1']);
                // console.log(range_s);
                // console.log(max);
                axios.get('/get-product-filter?min=' + min + '&max=' + max)
                    .then((res) => {
                        console.log(res.data);
                        this.product_list = res.data;
                    })
            },

            store: function () {
                console.log('clicked');

            },


        },
        computed: {
            ...window.getters(['get_selected_product_for_quick_view', 'get_selected_product_for_cart']),
        },
    });
}

if (document.getElementById('home-product-category')) {
    // alert('ok');
    const app = new Vue({
        el: '#home-product-category',
        store: store,
        data: function () {
            return {

                home_category: {},
                home_category_product: {},
            }
        },
        created: function () {
            this.getHomeCat();
            this.getCatroduct();
        },
        methods: {
            getHomeCat: function () {

                axios.get('/frontend-category')
                    .then(res => {
                        // console.log(res.data);
                        this.home_category = res.data;
                    })

            },
            getCatroduct: function (page = 1) {

                axios.get('/json-home-category-product?page=' + page)
                    .then(res => {
                        // console.log(res.data);
                        this.home_category_product = res.data;
                    })

            },

        },
        computed: {
            // ...window.getters(['get_selected_product_for_cart', 'get_selected_product_for_quick_view']),
        },
    });
}
if (document.getElementById('home-product-category-top')) {
    // alert('ok');
    const app = new Vue({
        el: '#home-product-category-top',
        store: store,
        data: function () {
            return {

                home_category: {},
                home_category_product: {},
                limit: 9
            }
        },
        created: function () {
            this.getHomeCat();
        },
        methods: {
            getHomeCat: function () {

                axios.get('/menu-category')
                    .then(res => {
                        // console.log(res.data);
                        this.home_category = res.data;
                    })

            },
            getCatLimit: function () {
                if(this.limit==9){
                    this.limit=100;
                }else{
                    this.limit=9;
                }
            },
       

        },
        computed: {
            // ...window.getters(['get_selected_product_for_cart', 'get_selected_product_for_quick_view']),
        },
    });
}
if (document.getElementById('product-details')) {
    // alert('ok');
    const app = new Vue({
        el: '#product-details',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    product_name: null,
                },
                cart_option: {
                    qty: 1,
                    price: 0,
                    // product_price:this.product.default_price,
                },
                product_item: {},
                categories: [],
            }
        },
        created: function () {
            this.getProduct();

            axios.get('/frontend-category')
                .then(response => this.categories = response.data)
                .catch(error => console.log(error));
            console.log(this.categories);
        },
        methods: {
            ...window.mutation([
                'add_new_product_to_cart',
            ]),
            getProduct: function () {

                if (location.pathname.split('/')[2]) {
                    axios.get(`/json-product-details/${location.pathname.split('/')[2]}`)
                        .then((res) => {
                            console.log(res.data);
                            this.product_item = res.data;
                        })
                }

            },
        },
        computed: {
            ...window.getters(['get_selected_product_for_cart', 'get_selected_product_for_quick_view']),
        },
    });
}
if (document.getElementById('product-details-two')) {
    // alert('ok');
    const app = new Vue({
        el: '#product-details-two',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    product_name: null,
                },
                cart_option: {
                    qty: 1,
                    price: 0,
                    // product_price:this.product.default_price,
                },
                product_item: {},
                categories: [],
                track_inventory: false,
                on_the_product_level: false,

                track_inventory_on_the_variant_level_stock: 0,
                track_inventory_on_the_variant_level_low_stock: 0,
                purchasability: 'can_be_purchased_in_online_store',
            }
        },
        created: function () {
            this.getProduct();

            axios.get('/frontend-category')
                .then(response => this.categories = response.data)
                .catch(error => console.log(error));
            console.log(this.categories);
        },
        methods: {
            ...window.mutation([
                'add_new_product_to_cart',
            ]),
            getProduct: function () {

                if (location.pathname.split('/')[2]) {
                    axios.get(`/json-product-details/${location.pathname.split('/')[2]}`)
                        .then((res) => {
                            console.log(res.data);
                            this.product_item = res.data;
                        })
                }

            },
        },
        computed: {
            ...window.getters(['get_selected_product_for_cart', 'get_selected_product_for_quick_view']),
        },
    });
}

if (document.getElementById('quick_view_modal')) {

    const app = new Vue({
        el: '#quick_view_modal',
        store: store,
        data: function () {
            return {}
        },
        created: function () {},
        methods: {

        },
        computed: {
            ...window.getters(['get_selected_product_for_quick_view']),
        },
    });
}

if (document.getElementById('cart_product_modal')) {

    const app = new Vue({
        el: '#cart_product_modal',
        store: store,
        data: function () {
            return {
                cart_option: {
                    qty: 1,
                    price: 0,
                    // product_price:this.product.default_price,
                }
            }
        },
        created: function () {
            // alert('created cart');
        },
        updated: function () {
            // console.log(this.get_selected_product_for_cart, 'changed');
            if (this.get_selected_product_for_cart.cart_option) {
                this.cart_option = this.get_selected_product_for_cart.cart_option;
            } else {
                this.cart_option.qty = 1;
            }
        },
        methods: {
            ...window.mutation([
                'add_new_product_to_cart',
                'change_cart_qty',
                'calculate_cart_total',
                'reset_cart_qty'

            ]),


        },
        computed: {
            ...window.getters(['get_selected_product_for_cart', 'get_sub_total']),
        },
    });
}


if (document.getElementById('mini_cart')) {

    const app = new Vue({
        el: '#mini_cart',
        store: store,
        data: function () {
            return {

            }
        },
        created: function () {},
        methods: {
            ...window.mutation([
                'remove_product_from_cart',
                'change_cart_qty',
                'calculate_cart_total',
            ]),
        },
        computed: {
            ...window.getters(['get_selected_cart_all_product', 'get_sub_total']),
        },
    });
}

if (document.getElementById('mini_cart_two')) {

    const app = new Vue({
        el: '#mini_cart_two',
        store: store,
        data: function () {
            return {

            }
        },
        created: function () {},
        methods: {
            ...window.mutation([
                'remove_product_from_cart',
                'change_cart_qty',
                'calculate_cart_total',
            ]),
        },
        computed: {
            ...window.getters(['get_selected_cart_all_product', 'get_sub_total']),
        },
    });
}

if (document.getElementById('cart_table')) {

    const app = new Vue({
        el: '#cart_table',
        store: store,
        data: function () {
            return {

            }
        },
        created: function () {},
        methods: {
            ...window.mutation([
                'remove_product_from_cart',
                'edit_cart_product',
                'change_cart_qty',
                'calculate_cart_total',
            ]),

            change_product_qty: function (event, product_id) {
                let product_info = {
                    qty: event.target.value,
                    product_id: product_id,
                };

                this.change_cart_qty(product_info);
            },
        },

        computed: {
            ...window.getters(['get_selected_cart_all_product', 'get_sub_total', 'get_selected_product_for_quick_view', 'get_selected_product_for_cart']),
        },
    });
}

if (document.getElementById('edit-cart-product')) {

    const app = new Vue({
        el: '#edit-cart-product',
        store: store,
        data: function () {
            return {

            }
        },
        created: function () {},
        methods: {
            ...window.mutation([
                'remove_product_from_cart',
                'change_cart_qty',
                'calculate_cart_total',
            ]),

            change_product_qty: function (event, product_id) {
                let product_info = {
                    qty: event.target.value,
                    product_id: product_id,
                };

                this.change_cart_qty(product_info);
            },
        },

        computed: {
            ...window.getters(['get_selected_cart_all_product', 'get_sub_total']),
        },
    });
}

if (document.getElementById('search_product')) {

    const app = new Vue({
        el: '#search_product',
        store: store,
        data: function () {
            return {
                search_key: '',
            }
        },

    });
}

if (document.getElementById('add-checkout')) {

    const app = new Vue({
        el: '#add-checkout',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    first_name: null,
                    last_name: null,
                    company_name: null,
                    street_address: null,
                    city: null,
                    country: null,
                    phone: null,
                    email: null,
                    product_id: null,
                    product_name: null,
                    product_code: null,
                    product_qty: null,
                    product_color: null,
                    product_size: null,
                    product_price: null,
                    product_discount: null,
                    comment: null,
                    total_price: null,
                },
            }
        },
        created: function () {
            this.form_data = this.get_billing_address;
        },
        methods: {
            ...window.mutation([
                'remove_product_from_cart',
                'change_cart_qty',
                'calculate_cart_total',
                'set_billing_address',
            ]),

            // store: function () {
            //     let form_datas = new FormData($('#form_body')[0]);
            //     axios.post('/save-checkout', form_datas)
            //         .then((res) => {
            //             console.log(res.data);
            //             // this.form_datas.clear();
            //             toaster('success', 'Successful.');
            //             this.$refs.anyName.reset();
            //         })
            //         .catch((err) => {
            //             // console.log(err.response);
            //             let errors = err.response.data.errors;
            //         })
            // },
            checout_confirm: function () {
                this.set_billing_address(this.form_data);
                window.location.href = "/invoice"
            }
        },

        computed: {
            ...window.getters(['get_selected_cart_all_product', 'get_sub_total', 'get_billing_address']),
        },
    });
}

if (document.getElementById('get-invoice')) {
    // alert('josko');
    const app = new Vue({
        el: '#get-invoice',
        store: store,
        data: function () {
            return {
                price_range: '',
            }
        },
        created: function () {
            if (this.get_selected_cart_all_product.length > 0) {
                let checkout_information = {
                    c_cart: this.get_selected_cart_all_product,
                    billing_address: this.get_billing_address,
                    sub_total: this.get_sub_total,
                }
                this.save_checkout_information(checkout_information);
            } else {
                // this.fetch_latest_saved_cart();
            }
        },
        methods: {
            ...window.action([
                'save_checkout_information',
                'fetch_latest_saved_cart',
                // 'reset_cart',

            ]),
            ...window.mutation([
                // 'save_checkout_information',
                // 'fetch_latest_saved_cart',
                'reset_cart',

            ]),


        },

        computed: {
            ...window.getters([
                'get_selected_cart_all_product',
                'get_sub_total',
                'get_billing_address',
                'get_invoice_id',
                'get_invoice_date',
                'get_check_success',
                'get_latest_saved_cart',
            ]),
        },
    });
}
if (document.getElementById('product-price')) {
    // alert('josko');
    const app = new Vue({
        el: '#product-price',
        store: store,
        data: function () {
            return {
                price_range: '',
            }
        },
        created: function () {
            this.init_jquery();
            this.filter_products();
            this.getProductFilter();
        },
        methods: {


            ...window.mutation([
                'add_selected_product_for_quick_view',
                'add_selected_product_for_cart',

            ]),

            // init_jquery: function () {
            //     let min_price = 0;
            //     let max_price = 0;
            //     $.get('/json-min-max-price', function (res) {
            //         // console.log(res.data);
            //         min_price=parseInt(res.min_price);
            //         max_price=parseInt(res.max_price);

            //         $("#slider-range").slider({
            //             range: true,
            //             min: min_price,
            //             max: max_price,
            //             values: [min_price, max_price],
            //             slide: function (event, ui) {
            //                 $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            //             }
            //         });
            //         $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            //             " - $" + $("#slider-range").slider("values", 1));
            //         // let range = $('#amount').val();
            //         // axios.get('/json-min-max-price?range='+range)
            //         //     .then((res)=>{
            //         //         console.log(res.data);
            //         //     })

            //     });


            // },
            // getProductFilter: function () {

            //     axios.get('/json-min-max-price')
            //         .then(res => {
            //             // console.log(res.data);
            //             this.price_range = res.data;
            //         })

            // },
            // filter_products: function(){
            //     // console.log(this.price_range, $('#amount').val());
            //     let range = $('#amount').val();
            //     let range_s= range.replace(/\$/g,'');
            //     // let range_ss= range_s.replace('-','');
            //     // range_ss.split(" ");
            //     let min= parseInt(range_s.split("-")['0']);
            //     let max= parseInt(range_s.split("-")['1']);
            //     // console.log(range_s);
            //     // console.log(max);
            //     axios.get('/get-product-filter?min='+min+'&max='+max)
            //         .then((res)=>{
            //             console.log(res.data);
            //             this.product_list = res.data;
            //         })
            // },


        },

    });
}
if (document.getElementById('product-price')) {
    // alert('josko');
    const app = new Vue({
        el: '#product-price',
        store: store,
        data: function () {
            return {
                price_range: '',
            }
        },
        created: function () {
            this.init_jquery();
            this.filter_products();
            this.getProductFilter();
        },
        methods: {


            ...window.mutation([
                'add_selected_product_for_quick_view',
                'add_selected_product_for_cart',

            ]),

            // init_jquery: function () {
            //     let min_price = 0;
            //     let max_price = 0;
            //     $.get('/json-min-max-price', function (res) {
            //         // console.log(res.data);
            //         min_price=parseInt(res.min_price);
            //         max_price=parseInt(res.max_price);

            //         $("#slider-range").slider({
            //             range: true,
            //             min: min_price,
            //             max: max_price,
            //             values: [min_price, max_price],
            //             slide: function (event, ui) {
            //                 $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            //             }
            //         });
            //         $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            //             " - $" + $("#slider-range").slider("values", 1));
            //         // let range = $('#amount').val();
            //         // axios.get('/json-min-max-price?range='+range)
            //         //     .then((res)=>{
            //         //         console.log(res.data);
            //         //     })

            //     });


            // },
            // getProductFilter: function () {

            //     axios.get('/json-min-max-price')
            //         .then(res => {
            //             // console.log(res.data);
            //             this.price_range = res.data;
            //         })

            // },
            // filter_products: function(){
            //     // console.log(this.price_range, $('#amount').val());
            //     let range = $('#amount').val();
            //     let range_s= range.replace(/\$/g,'');
            //     // let range_ss= range_s.replace('-','');
            //     // range_ss.split(" ");
            //     let min= parseInt(range_s.split("-")['0']);
            //     let max= parseInt(range_s.split("-")['1']);
            //     // console.log(range_s);
            //     // console.log(max);
            //     axios.get('/get-product-filter?min='+min+'&max='+max)
            //         .then((res)=>{
            //             console.log(res.data);
            //             this.product_list = res.data;
            //         })
            // },


        },

    });
}
if (document.getElementById('wish-list')) {
    // alert('ok');
    const app = new Vue({
        el: '#wish-list',
        store: store,
        data: function () {
            return {
                price_range: '',
            }
        },
        created: function () {
            // this.init_jquery();
            // this.filter_products();
            // this.getProductFilter();
        },
        methods: {


            ...window.mutation([
                'add_selected_product_for_cart',

            ]),

            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/edit-account', form_datas)
                    .then((res) => {
                        console.log(res.data);
                        // this.form_datas.clear();
                        toaster('success', 'Successful.');
                    })
                    .catch((err) => {
                        // console.log(err.response);
                        let errors = err.response.data.errors;
                    })
            },



        },

    });
}
