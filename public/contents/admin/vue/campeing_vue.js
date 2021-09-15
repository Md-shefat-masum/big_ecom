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
            }
        },
        watch: {
            camp_selected_products: {
                handler: function () {
                    this.calculate_total();
                },
                deep: true,
            },
            total_discount: {
                handler: function (val) {
                    if (val < 0) {
                        this.total_discount = 0;
                    }
                    if (val > 100) {
                        this.total_discount = 100;
                    }
                    this.calculate_total();
                },
                deep: true,
            },
        },
        created: function () {
            console.log('hi');
            this.get_products();
        },
        methods: {
            get_products: function (page = 1) {
                axios.get('/admin/product/list/json?page=' + page)
                    .then((res) => {
                        // console.log(res.data);
                        this.products = res.data;
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
            calculate_total: function () {
                let total = 0;
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
                });
                this.sub_total = this.total = total.toFixed(2);

                if (this.total_discount > 0) {
                    this.total = (total - (total * (this.total_discount / 100))).toFixed(2);
                }
            }
        },
    })
}
