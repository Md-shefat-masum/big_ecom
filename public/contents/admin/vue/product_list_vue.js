
const {
    default: store
} = window.store;

if (document.getElementById('product_list')) {
    const app = new Vue({
        el: '#product_list',
        store: store,
        data: function(){
            return {
                products: {},
            }
        },
        created: function(){
            this.get_products();
        },
        methods:{
            get_products: function(page=1){
                axios.get('/admin/product/list/json?page='+page)
                    .then((res)=>{
                        // console.log(res.data);
                        this.products = res.data;
                    })
            }
        }
    });
}
