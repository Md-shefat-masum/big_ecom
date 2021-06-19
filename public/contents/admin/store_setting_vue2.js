const { default: store } = window.store;



if (document.getElementById('store_setup_settings_website')) {
    // console.log('ok');
    const app = new Vue({
        el: '#store_setup_settings_website',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    weight_measurement: null,
                    length_measurement: null,
                    decimal_token: null,
                    thousands_token: null,
                    decimal_places: null,
                    factoring_dimension: null,
                    home_page_title: null,
                    meta_keywords: null,
                    meta_description: null,
                    redirect: null,
                    slug: null,
                },
            }
        },
        created: function(){
            this.getSetting();
        },
        methods: {
            getSetting: function(){

               axios.get('/admin/get-website-settings')
                    .then(res=>{
                        // console.log(res.data);
                        this.form_data = res.data;
                    })
    
            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/admin/create-store-setup-settings-website', form_datas)
                    .then((res) => {
                        // console.log(res.data);
                        // this.form_datas.clear();
                        toaster('success', 'new data created.');
                    })
                    .catch((err) => {
                        // console.log(err.response);
                        let errors = err.response.data.errors;
                    })
            },

            // check_decimal: function(){
            //     console.log(this.form_data.decimal_token);
            // },
        },
    });
}

if (document.getElementById('store_setup_settings_display')) {
    alert('ok');
    const app = new Vue({
        el: '#store_setup_settings_display',
        store: store,
        data: function () {
            return {
                form_data: {
                    id: null,
                    product_breadcrumbs: null,
                    show_quantity_box: null,
                    enable_search_suggest: null,
                    auto_approve_reviews: null,
                    enable_wishlist: null,
                    enable_product_comparisons: null,
                    enable_account_creation: null,
                    editor: null,
                    product_thumbnails: null,
                    category_product_list: null,
                    default_product_sort: null,
                    menu_display_depth: null,
                    show_product_price: null,
                    show_product_sku: null,
                    show_product_weight: null,
                    show_product_brand: null,
                    show_product_shipping_cost: null,
                    show_product_rating: null,
                    show_add_to_cart_link: null,
                    default_pre_order_message: null,
                    slug: null,
                },
            }
        },
        // created: function(){
        //     this.getSetting();
        // },
        methods: {
            // getSetting: function(){

            //    axios.get('/admin/get-store-setup-settings-display')
            //         .then(res=>{
            //             console.log(res.data);
            //             this.form_data = res.data;
            //         })
    
            // },
            // store: function () {
            //     let form_datas = new FormData($('#form_body')[0]);
            //     axios.post('/admin/create-store-setup-settings-display', form_datas)
            //         .then((res) => {
            //             console.log(res.data);
            //             // this.form_datas.clear();
            //             toaster('success', 'new data created.');
            //         })
            //         .catch((err) => {
            //             // console.log(err.response);
            //             let errors = err.response.data.errors;
            //         })
            // },

            // check_decimal: function(){
            //     console.log(this.form_data.decimal_token);
            // },
        },
    });
}
