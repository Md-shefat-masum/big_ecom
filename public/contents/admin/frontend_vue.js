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

                axios.get('/frontend-get-account')
                    .then(res => {
                        console.log(res.data);
                        this.form_data = res.data;
                    })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/frontend-edit-account', form_datas)
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
                product_list: {},
                // selected_product_for_modal : null,
            }
        },
        created: function () {
            this.getProduct();
        },
        methods: {
            ...window.mutation([
                    'add_selected_product_for_quick_view',
                    'add_selected_product_for_cart'
                ]),

            getProduct: function () {

                axios.get('/frontend-get-product')
                    .then(res => {
                        console.log(res.data);
                        this.product_list = res.data;
                    })

            },

            store: function () {
                console.log('clicked');
                // let form_datas = new FormData($('#form_body')[0]);
                // axios.post('/add-to-cart', form_datas)
                //     .then((res) => {
                //         console.log(res.data);
                //         // this.form_datas.clear();
                //         toaster('success', 'Successful.');
                //     })
                //     .catch((err) => {
                //         // console.log(err.response);
                //         let errors = err.response.data.errors;
                //     })
            },

            // selected_product_for_modal_trigger: function(product){
            //     console.log(product);
            //     this.selected_product_for_modal = product;
            //     $('#quick_view_modal').modal('show');
            // }
        },
        computed: {
            ...window.getters(['get_selected_product_for_quick_view','get_selected_product_for_cart']),
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

if (document.getElementById('cart_view_modal')) {

    const app = new Vue({
        el: '#cart_view_modal',
        store: store,
        data: function () {
            return {
                cart_option : {
                    qty: 1,
                }
            }
        },
        created: function () {},
        methods: {
            ...window.mutation([
                'add_new_product_to_cart',
            ]),
        },
        computed: {
            ...window.getters(['get_selected_product_for_cart']),
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
            ]),
        },
        computed: {
            ...window.getters(['get_selected_cart_all_product']),
        },
    });
}
