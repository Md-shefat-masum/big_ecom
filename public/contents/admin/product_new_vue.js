const {
    default: store
} = window.store;

if (document.getElementById('product_tax_class')) {
    // alert('ok');
    const app = new Vue({
        el: '#product_tax_class',
        store: store,
        data: function () {
            return {
                form_data: {

                    id: null,
                    tax_class_name: null,

                },
            }
        },
        created: function () {
            this.edit();
        },
        methods: {
            edit: function () {

                if (location.pathname.split('/')[3]) {
                    axios.get(`/admin/product-tax-class-get/${location.pathname.split('/')[3]}`)
                        .then((res) => {
                            this.form_data = res.data;
                        })
                }


                // axios.get(`/admin/product-tax-class-edit/${this.$route.params.id}`)
                //     .then(res => {
                //         console.log(res.data);
                //         this.form_data = res.data;
                //         // this.form_data.fill(res.data);
                //     })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/admin/product-tax-class/submit', form_datas)
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

            update: function () {
                let form_datas = new FormData($('#form_body')[0]);
                // form_data.append('id', JSON.stringify(this.id));
                axios.post('/admin/product-tax-class-update', form_datas)
                    .then((res) => {
                        // console.log(res.data);
                        // this.form_datas.clear();
                        toaster('success', 'Successful.');
                    })

            },


        },
    });
}
if (document.getElementById('product_discount_type')) {
    // alert('ok');
    const app = new Vue({
        el: '#product_discount_type',
        // store: store,
        data: function () {
            return {
                form_data: {

                    id: null,
                    discount_type_name: null,

                },
            }
        },
        created: function () {
            this.getSetting();
        },
        methods: {
            getSetting: function () {

                axios.get('/admin/product-discount-type-edit' + id)
                    .then(res => {
                        console.log(res.data);
                        this.form_data = res.data;
                    })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/admin/product-discount-type/submit', form_datas)
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

            // update: function () {
            //     let form_datas = new FormData($('#form_body')[0]);
            //     axios.post('/admin/product-discount-type-update', form_datas)
            //         .then((res) => {
            //             console.log(res.data);
            //             // this.form_datas.clear();
            //             toaster('success', 'Successful.');
            //         })
            //         .catch((err) => {
            //             // console.log(err.response);
            //             let errors = err.response.data.errors;
            //         })
            // },


        },
    });
}
if (document.getElementById('product_object_type')) {
    // alert('ok');
    const app = new Vue({
        el: '#product_object_type',
        // store: store,
        data: function () {
            return {
                form_data: {

                    id: null,
                    object_type_name: null,

                },
            }
        },
        created: function () {
            this.getSetting();
        },
        methods: {
            getSetting: function () {

                axios.get('/admin/product-object-type-edit' + id)
                    .then(res => {
                        console.log(res.data);
                        this.form_data = res.data;
                    })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/admin/product-object-type/submit', form_datas)
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

            // update: function () {
            //     let form_datas = new FormData($('#form_body')[0]);
            //     axios.post('/admin/product-object-type-update', form_datas)
            //         .then((res) => {
            //             console.log(res.data);
            //             // this.form_datas.clear();
            //             toaster('success', 'Successful.');
            //         })
            //         .catch((err) => {
            //             // console.log(err.response);
            //             let errors = err.response.data.errors;
            //         })
            // },


        },
    });
}
if (document.getElementById('product_condition')) {
    // alert('ok');
    const app = new Vue({
        el: '#product_condition',
        // store: store,
        data: function () {
            return {
                form_data: {

                    id: null,
                    product_condition_name: null,

                },
            }
        },
        created: function () {
            this.getSetting();
        },
        methods: {
            getSetting: function () {

                axios.get('/admin/product-condition-edit' + id)
                    .then(res => {
                        console.log(res.data);
                        this.form_data = res.data;
                    })

            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);
                axios.post('/admin/product-condition/submit', form_datas)
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

            // update: function () {
            //     let form_datas = new FormData($('#form_body')[0]);
            //     axios.post('/admin/product-condition-update', form_datas)
            //         .then((res) => {
            //             console.log(res.data);
            //             // this.form_datas.clear();
            //             toaster('success', 'Successful.');
            //         })
            //         .catch((err) => {
            //             // console.log(err.response);
            //             let errors = err.response.data.errors;
            //         })
            // },


        },
    });
}
