import axios from 'axios';

// state list
const state = {
    sub_total: 0,
    cart_products: [],
    billing_address: {
        first_name: '',
        last_name: '',
        company_name: '',
        street_address: '',
        city: '',
        country: '',
        phone: '',
        email: '',
        product_id: '',
        product_qty: '',
        product_color: '',
        product_size: '',
        product_price: '',
        product_discount: '',
        comment: '',
        total_price: '',
    },
    selected_cart_product: {
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
    selected_product_for_quick_view: {},
    selected_product_for_cart: {},
    selected_product_for_wishlist: {},
    latest_saved_cart: {},
    invoice_date: '',
    invoice_id: '',
    check_success: false,
}

// get state
const getters = {
    get_selected_cart_product: state => state.selected_cart_product,
    get_selected_cart_all_product: state => state.cart_products,
    get_selected_product_for_quick_view: state => state.selected_product_for_quick_view,
    get_selected_product_for_cart: state => state.selected_product_for_cart,
    get_selected_product_for_wishlist: state => state.selected_product_for_wishlist,
    get_sub_total: state => state.sub_total,
    get_billing_address: state => state.billing_address,
    get_invoice_date: state => state.invoice_date,
    get_invoice_id: state => state.invoice_id,
    get_check_success: state => state.check_success,
    get_latest_saved_cart: state => state.latest_saved_cart,
}

// actions
const actions = {
    save_checkout_information: function (state, checkout_information) {
        console.log(checkout_information);
        axios.post('/save-checkout', checkout_information).then((res) => {
            console.log(res.data);
            // invoice_id : res.data.invoice_id,
            // invoice_date : res.data.invoice_date,
            this.commit('set_invoice_id_and_date', {
                invoice_id: res.data.invoice_id,
                invoice_date: res.data.invoice_date,
            });
        });
    },
    fetch_latest_saved_cart: function (state) {
        axios.get('/get-checkout-information')
            .then((res) => {
                console.log(res);
                this.commit('save_latest_saved_cart', res.data);
            })

    },

}

// mutators
const mutations = {
    // set_post_comment: function(state,comment){
    //     state.comments.unshift(comment);
    // },

    add_new_product_to_cart: function (state, cart_body) {

        let temp_cart = state.cart_products.filter((item) => item.product.id != cart_body.product.id);
        // console.log(cart_body);
        // console.log(state.cart_products);
        state.cart_products = temp_cart;
        state.cart_products.unshift(cart_body);
        $('#cart_product_modal').modal('hide');
        //   console.log(cart_body);
        // cart_body.cart_option.qty = 1;
        this.commit('calculate_cart_total');


    },

    // reset_cart_qty: function (state, cart) {
    //     cart.cart_option.qty = 1;
    // },

    remove_product_from_cart: function (state, index) {
        // console.log(cart_body);
        state.cart_products.splice(index, 1);
        this.commit('calculate_cart_total');
    },

    edit_cart_product: function (state, item) {
        // console.log(item);
        state.selected_product_for_cart = item.product;
        state.selected_product_for_cart.cart_option = item.cart_option;

        // console.log(state.selected_product_for_cart, item);
        $('#cart_product_modal').modal('show');
    },

    add_selected_product_for_quick_view: function (state, selected_product) {
        state.selected_product_for_quick_view = selected_product;
        $('#quick_view_modal').modal('show');
    },

    add_selected_product_for_cart: function (state, selected_product) {
        state.selected_product_for_cart = selected_product;
        $('#cart_product_modal').modal('show');
    },

    change_cart_qty: function (state, product_info) {
        let product = state.cart_products.find((item) => {
            return item.product.id === product_info.product_id;
        });
        product.cart_option.qty = product_info.qty;
        this.commit('calculate_cart_total');
        // console.log( product.qty);
    },
    calculate_cart_total: function (state, total) {
        state.sub_total = state.cart_products.reduce((total, item) => total += (item.product.default_price * item.cart_option.qty), 0);
        // this.commit('change_cart_qty');
    },
    set_billing_address: function (state, form_data) {
        state.billing_address = form_data;
        console.log(form_data);
    },
    // save_checkout_information: function (state, checkout_information) {
    //     console.log(checkout_information);
    //     axios.post('/save-checkout', checkout_information).then((res) => {
    //         console.log(res.data);
    //         // invoice_id : res.data.invoice_id,
    //         // invoice_date : res.data.invoice_date,
    //         this.commit('set_invoice_id_and_date', {
    //             invoice_id: res.data.invoice_id,
    //             invoice_date: res.data.invoice_date,
    //         });
    //     });
    // },
    // fetch_latest_saved_cart: function (state) {
    //     axios.get('/get_checkout_information')
    //         .then((res) => {
    //             this.commit('save_latest_saved_cart', res.data);
    //         })

    // },
    set_invoice_id_and_date: function (state, info) {
        state.invoice_id = info.invoice_id;
        state.invoice_date = info.invoice_date;
        state.check_success = true;
        this.commit('reset_cart', null, {
            root: true
        });
        this.dispatch('fetch_latest_saved_cart', null, {
            root: true
        });
    },
    reset_cart: function (state) {
        state.sub_total = 0;
        state.cart_products = [];
        state.selected_cart_product = {};
    },
    save_latest_saved_cart: function (state, info) {
        state.latest_saved_cart = info;
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
