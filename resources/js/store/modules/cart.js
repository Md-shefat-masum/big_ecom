import axios from 'axios';

// state list
const state = {
    sub_total: 0,
    cart_products: [],
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
}

// get state
const getters = {
    get_selected_cart_product: state => state.selected_cart_product,
    get_selected_cart_all_product: state => state.cart_products,
    get_selected_product_for_quick_view: state => state.selected_product_for_quick_view,
    get_selected_product_for_cart: state => state.selected_product_for_cart,
    get_sub_total: state => state.sub_total,
}

// actions
const actions = {
    // fetch_blog_details: function(state,blog){
    //     this.commit('set_blog_details',blog)
    // },
}

// mutators
const mutations = {
    // set_post_comment: function(state,comment){
    //     state.comments.unshift(comment);
    // },

    add_new_product_to_cart: function (state, cart_body) {

        let temp_cart = state.cart_products.filter((item)=>item.product.id != cart_body.product.id);
            // console.log(temp_cart);
            // console.log(state.cart_products);
            state.cart_products = temp_cart;
            state.cart_products.unshift(cart_body);
            $('#cart_view_modal').modal('hide');
            this.commit('calculate_cart_total');


    },

    remove_product_from_cart: function (state, index) {
        // console.log(cart_body);
        state.cart_products.splice(index, 1);
        this.commit('calculate_cart_total');
    },
    add_selected_product_for_quick_view: function (state, selected_product) {
        state.selected_product_for_quick_view = selected_product;
        $('#quick_view_modal').modal('show');
    },
    add_selected_product_for_cart: function (state, selected_product) {
        state.selected_product_for_cart = selected_product;
        $('#cart_view_modal').modal('show');
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
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
