import axios from 'axios';

// state list
const state = {
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
        // console.log(cart_body);
        state.cart_products.unshift(cart_body);
        $('#cart_view_modal').modal('hide');
    },
    
    remove_product_from_cart: function (state, index) {
        // console.log(cart_body);
        state.cart_products.splice(index,1);
    },
    add_selected_product_for_quick_view: function (state, selected_product) {
        state.selected_product_for_quick_view = selected_product;
        $('#quick_view_modal').modal('show');
    },
    add_selected_product_for_cart: function (state, selected_product) {
        state.selected_product_for_cart = selected_product;
        $('#cart_view_modal').modal('show');
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
