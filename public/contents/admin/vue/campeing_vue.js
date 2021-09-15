const {
    default: store
} = window.store;
if (document.getElementById('campeing_form')) {
    const app = new Vue({
        el: '#campeing_form',
        store: store,
        data: function () {
            return {
                products: {},
                search_key: '',
                camp_selected_products: [],

                total_discount: 0,
                sub_total: 0,
                total: 0,

                campeing_id: null,

                additional_fields: [{
                    field_name: '',
                    field_value: '',
                }]
            }
        },
        watch: {
            camp_selected_products: {
                handler: function () {
                    this.calculate_total();
                },
                deep: true,
            },
            // total_discount: {
            //     handler: function (val) {
            //         if (val < 0) {
            //             this.total_discount = 0;
            //         }
            //         if (val > 100) {
            //             this.total_discount = 100;
            //         }
            //         this.calculate_total();
            //     },
            //     deep: true,
            // },
        },
        created: function () {
            this.get_products();

            if (document.getElementById('edit_campeing')) {
                this.campeing_id = parseInt(window.location.pathname.split('/')[4]);
                this.get_campeing();
            }

        },
        methods: {
            get_products: function (page = 1) {
                axios.get('/admin/product/list/json?page=' + page)
                    .then((res) => {
                        // console.log(res.data);
                        this.products = res.data;
                    })
            },
            get_campeing: function () {
                axios.get('/admin/product/get-campeing-json/' + this.campeing_id)
                    .then((res) => {
                        // console.log(res.data);
                        this.additional_fields = JSON.parse(res.data.additional_fields);
                        this.camp_selected_products = JSON.parse(res.data.products);

                        let campeing = res.data;
                        for (const key in campeing) {
                            if (Object.hasOwnProperty.call(campeing, key)) {
                                const element = campeing[key];
                                if (key !== 'image') {
                                    $(`input[name="${key}"]`).val(element);
                                    $(`select[name="${key}"]`).val(element);
                                    $(`textarea[name="${key}"]`).val(element);
                                }

                                if (key == 'image') {
                                    $('#camp_image').attr('src', '/' + element);
                                }
                            }
                        }
                    })
            },
            search_product: function () {
                axios.post('/search-product/json', {
                        key: this.search_key
                    })
                    .then((res) => {
                        // console.log(res.data);
                        this.products = res.data;
                    })
            },
            select_to_list: function (product) {
                let temp_product = JSON.parse(JSON.stringify(product));
                temp_product.discount = 0;
                this.camp_selected_products = this.camp_selected_products.filter((item) => item.id != product.id);
                this.camp_selected_products.unshift(temp_product);
            },
            delete_from_list: function (index) {
                this.camp_selected_products.splice(index, 1);
            },
            change_total_discount: function () {
                if (this.total_discount < 0) {
                    this.total_discount = 0;
                }
                if (this.total_discount > 100) {
                    this.total_discount = 100;
                }
                this.calculate_total();
            },
            calculate_total: function () {
                let total = 0;
                let total_without_discount = 0;
                let temp_discount = 0;
                this.camp_selected_products.forEach(product => {
                    if (product.discount < 0) {
                        product.discount = 0;
                    }
                    if (product.discount > 0) {
                        if (product.discount > 100) {
                            product.discount = 100;
                        }
                        total += parseFloat(product.default_price) - (parseFloat(product.default_price) * (parseFloat(product.discount) / 100));
                    } else {
                        total += parseFloat(product.default_price);
                    }

                    temp_discount += parseInt(product.discount);
                    total_without_discount += parseFloat(product.default_price);
                });
                this.sub_total = this.total = total.toFixed(2);

                if (temp_discount > 0) {
                    this.total_discount = 100 - Math.ceil((total * 100) / total_without_discount);
                } else {
                    this.total_discount = 0;
                }

                if (this.total_discount > 0) {
                    this.total = (total - (total * (this.total_discount / 100))).toFixed(2);
                }
            },
            create_additional_field: function () {
                this.additional_fields.push({
                    field_name: '',
                    field_value: '',
                });
            },
            remove_additional_field: function (index) {
                this.additional_fields.splice(index, 1);
            },

            create_campeing: function () {
                let form_data = new FormData($('#campeign_form')[0]);
                form_data.append('additional_fields', JSON.stringify(this.additional_fields));
                form_data.append('camp_selected_products', JSON.stringify(this.camp_selected_products));
                form_data.append('subtotal', this.sub_total);
                form_data.append('total', this.total);
                form_data.append('discount', this.total_discount);

                axios.post('/admin/product/store-campeing', form_data)
                    .then((res) => {
                        // console.log(res.data);
                        toaster('success', 'data uploaded successfully');
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    })
                    .catch((err) => {
                        console.log(err.response.data);
                    })
            },
            update_campeing: function () {
                let form_data = new FormData($('#campeign_form')[0]);
                form_data.append('additional_fields', JSON.stringify(this.additional_fields));
                form_data.append('camp_selected_products', JSON.stringify(this.camp_selected_products));
                form_data.append('subtotal', this.sub_total);
                form_data.append('total', this.total);
                form_data.append('discount', this.total_discount);
                form_data.append('id', this.campeing_id);

                axios.post('/admin/product/update-campeing', form_data)
                    .then((res) => {
                        // console.log(res.data);
                        toaster('success', 'data uploaded successfully');
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    })
                    .catch((err) => {
                        console.log(err.response.data);
                    })
            },
        },
    })
}

if (document.getElementById('campeing_list')) {
    const app = new Vue({
        el: '#campeing_list',
        data: function () {
            return {
                campeings: {},
                show_type: 'all',
            }
        },
        created: function () {
            this.get_campeings();
        },
        methods: {
            get_campeings: function (page = 1) {
                axios.get('/admin/product/list-campeing/json?page=' + page + `&show_type=${this.show_type}`)
                    .then((res) => {
                        this.campeings = res.data;
                    })
            },
            change_type: function (show_type) {
                this.show_type = show_type;
                this.get_campeings();
            },
            delete_campeing: function (id, index) {
                let con = confirm('sure want to delete?');
                if (con) {
                    axios.post('/admin/product/delete-campeing', {
                            id: id
                        })
                        .then((res) => {
                            this.campeings.data.splice(index, 1);
                            console.log(res);
                            toaster('success', 'data deleted');
                        })
                }
            }

        }
    })
}
