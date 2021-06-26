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
    }
}

// get state
const getters = {
    get_selected_cart_product: state => state.selected_cart_product,
    get_selected_cart_all_product: state => state.cart_products,
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

    add_new_product_to_cart: function(state,cart_body){
        console.log(cart_body);
        state.cart_products.unshift(cart_body);
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
