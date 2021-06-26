// import axios from 'axios';

// state list
const state = {
    check_auth: false,
    auth_info: {
        id: null,
        first_name: null,
        last_name: null,
        username: null,
        role_id: null,
        avatar: null,
        phone: null,
        address: null,
        status: null,
    },
    default_login_form_show: true,
    auth_errors:{}
}

// get state
const getters = {
    get_check_auth: state => state.check_auth,
    get_auth_info: state => state.auth_info,
}

// actions
const actions = {
    fetch_category_info: function (state) {
        axios.get('/get-auth-info')
            .then((res) => {
                console.log(res.data);
                this.commit('set_auth_info',res.data)
            })
    },

}

// mutators
const mutations = {
    set_auth_info: function (state, auth_info) {
        // state.check_auth = check_auth;
        // state.auth_errors = {};
        // state.default_login_form_show = true;
        state.auth_info = auth_info;
    },

    test_mutation: function(){
        console.log('ok');
    }

}

export default {
    state,
    getters,
    actions,
    mutations
}
