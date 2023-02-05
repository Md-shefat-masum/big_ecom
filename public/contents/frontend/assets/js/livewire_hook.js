document.addEventListener("DOMContentLoaded", () => {
    Livewire.hook('component.initialized', (component) => {
        //
        // console.log('34',component.data);

    })
    Livewire.hook('element.initialized', (el, component) => {
        // console.log('37',component.data);
        // component.data.auth_check?window.location.href='/admin':'';
    })
    Livewire.hook('element.updating', (fromEl, toEl, component) => {})
    Livewire.hook('element.updated', (el, component) => {})
    Livewire.hook('element.removed', (el, component) => {})
    Livewire.hook('message.sent', (message, component) => {})
    Livewire.hook('message.failed', (message, component) => {})
    Livewire.hook('message.received', (message, component) => {
        find_event_status(message);

        // if(message.component.listeners.includes("product_cart_update")) {
        //     Livewire.emit('cartAdded');
        //     window.s_alert("success", "Product Added to cart successfully.")
        // }

        let access_token = message.response.serverMemo.data?.access_token;
        if(access_token){
            window.localStorage.setItem('token',access_token);
            window.location.href = "/admin";
        }
    })
    Livewire.hook('message.processed', (message, component) => {
        // console.log('48');
    })
    Livewire.on('cartAdded', ()=> {
        document.querySelector('.modal-backdrop')?.classList.add('d-none');  
        window.s_alert("success", "Product Added to cart successfully.")
    });
    Livewire.on('test', ()=> {
        window.s_alert("success", "test")
    });
    Livewire.on('cartRemoved', ()=> {
        window.s_alert("success", "Product Removed from cart.")
    });
    Livewire.on('cartUpdated', ()=> {
        window.s_alert("success", "Cart Updated.")
    });
    
});
function showModal(product) {
    Livewire.emit('viewProduct', product);
    
    setTimeout(() => {
        document.querySelector('body').classList.add('modal-open');
        document.querySelector('body').style.overflow= 'hidden';
        document.querySelector('body').style.paddingRight= '17px';
        document.querySelector('#action-QuickViewModal').classList.add('show');
        document.querySelector('#action-QuickViewModal').classList.add('d-block');
        document.querySelector('.modal-backdrop').classList.remove('d-none');
        // document.querySelector('#closeModalbutton').addEventListener('click', closeModal);
    }, 500);
}

function showQuickView(product) {
    fetch("/product_quickview/"+product, {
        method: "get"
    }).then(res => {
        return res.text()
    }).then(res => {
        document.getElementById('quick_view_product_modal').innerHTML = res
    })
}

function closeModal() {
    Livewire.emit('CloseViewProduct');

    setTimeout(() => {
        document.querySelector('body').classList.remove('modal-open');
        document.querySelector('body').style.overflow= '';
        document.querySelector('body').style.paddingRight= '';
        // document.querySelector('#action-QuickViewModal').classList.remove('show');
        // document.querySelector('#action-QuickViewModal').classList.remove('d-block');
        document.querySelector('.modal-backdrop').classList.add('d-none');
    }, 500);
}
document.addEventListener("turbolinks:load", function(event) {
    window.livewire.start();
});

var find_event_status = (message) => {
    // console.log(message);
    let data = message.response.serverMemo.data;
    let status = message.response.serverMemo.data?.status_message;
    if(status === 'cartRemoved'){
        update_cart_count_html(data.cart_amount);
    }
}
var update_cart_count_html = (cart_amount) =>{
    document.querySelector('.cart-count').innerHTML = cart_amount
}