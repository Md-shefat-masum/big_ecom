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
     

        methods: {
            getSetting: function(){

               axios.get('/admin/update-store-setup-settings-website').then(response=>{
                    console.log("uqwdguuod");
                    // const { weight_measurement, length_measurement } = response.data
                    // this.form_data.weight_measurement = weight_measurement
                    // this.form_data.length_measurement = length_measurement
                })   
                .catch((error) => {
                    console.log(error);
                    // let errors = err.response.data.errors;
                })
        
            },
            store: function () {
                let form_datas = new FormData($('#form_body')[0]);

                axios.post('/admin/create-store-setup-settings-website', form_datas)
                    .then((res) => {
                        // console.log(res.data);
                        this.form_datas.clear();
                        toaster('success', 'new data created.');
                    })
                    .catch((err) => {
                        // console.log(err.response);
                        let errors = err.response.data.errors;
                    })


            },
            update: function () {
                // let form_datas = new FormData($('#form_body')[0]);

                // axios.post('/admin/create-store-setup-settings-website/'+this.form_datas.id)
                //     .then((res) => {
                //         let id = this.$route.params.id;
                //         let formData = new FormData();
                //         formData.append('id', this.id);
                //         formData.append(' weight_measurement', this.weight_measurement);
                //         formData.append('_method', 'patch');
                   
                //     })
                //     .catch((err) => {
                //         // console.log(err.response);
                //         let errors = err.response.data.errors;
                //     })


            },

         
        },
        created: function(){
            this.getSetting();
        //    console.log('qwdgvugywqfgu8');
        },
    });
}
