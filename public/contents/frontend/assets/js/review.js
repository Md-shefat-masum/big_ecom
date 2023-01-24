$("#website_register").hide();
$("#register_btn_link").click(function () {
    $("#website_login").hide();    
    $("#website_register").show();    
});

$("#login_btn_link").click(function () {
    $("#website_login").show();    
    $("#website_register").hide();    
});
function login() {
    event.preventDefault();
    let formData = new FormData(event.target);

    fetch("/website_login", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: formData
    }).then(async res => {
        let response = {}
        response.status = res.status
        response.data = await res.json();
        return response;
    }).then(res => {
        console.log(res);
        if(res.status === 422) {
            error_response(res.data)
        }
        if(res.status === 401) {
            $("#login_modal").click();
        }
        if(res.status === 200) {
            $("#login_modal_close").click();
            reviewSubmit();
        }
    })
}

function register() {
    event.preventDefault();
    let formData = new FormData(event.target);

    fetch("/website_register", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: formData
    }).then(async res => {
        let response = {}
        response.status = res.status
        response.data = await res.json();
        return response;
    }).then(res => {
        console.log(res);
        if(res.status === 422) {
            error_response(res.data)
        }
        if(res.status === 401) {
            $("#login_modal").click();
        }
        if(res.status === 200) {
            $("#login_modal_close").click();
            reviewSubmit();
        }
    })
}

function reviewSubmit() {
    event?.preventDefault();
    let formData = new FormData($("#review-form")[0]);

    fetch("/review_submit", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: formData
    }).then(async res => {
        let response = {}
        response.status = res.status
        response.data = await res.json();
        return response;
    }).then(res => {
        if(res.status === 422) {
            error_response(res.data)
        }
        if(res.status === 401) {
            $("#login_modal").click();
        }
        if(res.status === 200) {
            window.s_alert("success", "Review created successfully");
            document.getElementById("review_description").value = "";
            Livewire.emit('reviewAdded');
        }
    })
    
}

$("#login_modal").addClass('d-none');