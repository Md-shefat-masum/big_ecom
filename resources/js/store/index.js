import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from "vuex-persistedstate";
Vue.use(Vuex);

import auth_information from './modules/auth_information';
import cart from './modules/cart';

const store = new Vuex.Store({
    modules: {
        auth_information,
        cart,
    },
    state: {},
    getters: {},
    mutations: {},
    actions: {},
    plugins: [createPersistedState()],
});

export default store;
