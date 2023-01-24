function addToCart(product_id, qty=1) {
    fetch("/add_to_cart", {
        method: "POST",
        headers: {
            "content-type": "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({
            id: product_id,
            qty: qty
        })
    }).then(res => {
        return res.json()
    }).then(res => {
        console.log(res);
    })
}

function checkout(event) {
    event.preventDefault();
    let formData = new FormData(event.target);

    fetch("/checkout", {
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
        if(res.status === 200) {
            location.href = "/order-complete";
        }
    })
}

function login(params) {
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
            window.s_alert("success", "Review created successfully")
        }
    })
}

function register(params) {
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
            window.s_alert("success", "Review created successfully")
        }
    })
}

function reviewSubmit(event) {
    event.preventDefault();
    let formData = new FormData(event.target);

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
            window.s_alert("success", "Review created successfully")
        }
    })

    document.getElementById("review_description").value = "";
}

$("#login_modal").addClass('d-none');
$('#bkash_btn').change(function () {
    $('#bkash_section').removeClass('d-none');
    $('#bank_section').addClass('d-none');
    $('#bkash_number').attr('required');
    $('#bkash_trx_id').attr('required');
});
$('#bank_transfer_btn').change(function () {
    $('#bkash_section').addClass('d-none');
    $('#bank_section').removeClass('d-none');
    $('#bank_ac_no').attr('required');
    $('#bank_trx_no').attr('required');
});
$('#cod_btn').change(function () {
    $('#bkash_section').addClass('d-none');
    $('#bank_section').addClass('d-none');
});

function error_response(data) {
    // console.log(data);
    $('.loader_body').removeClass('active');
    $('form button').prop('disabled',false);
    $('#backend_body .main_content').css({overflowY:'scroll'});
    // whatever you want to do with the error
    // console.log(error.response.data.errors);
    let object = data.data;
    $(`label`).siblings(".text-danger").remove();
    $(`select`).siblings(".text-danger").remove();
    $(`input`).siblings(".text-danger").remove();
    $(`textarea`).siblings(".text-danger").remove();
    $('.form_errors').html('');

    let error_html = ``;

    for (const key in object) {
        if (Object.hasOwnProperty.call(object, key)) {
            const element = object[key];
            if (document.getElementById(`${key}`)) {
                $(`#${key}`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);
            } else {
                $(`input[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`select[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`input[name="${key}"]`).trigger("focus");

                $(`textarea[name="${key}"]`)
                    .parent("div")
                    .append(`<div class="text-danger">${element[0]}</div>`);

                $(`textarea[name="${key}"]`).trigger("focus");
            }
            // console.log({
            //     [key]: element,
            // });

            error_html += `
                <div class="alert alert_${key} my-1 mx-2 alert-danger pe-5 inverse alert-dismissible fade show" role="alert">
                    <i class="icon-alert txt-dark rounded-0"></i>
                    <div>${element}</div>
                    <button type="button" class="btn-close txt-light" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            `;
        }
    }

    $('.form_errors').html(error_html);

    if (typeof data === "string") {
        // console.log("error", data);
    } else {
        // console.log(data);
    }

    window.s_alert('error',data.err_message)
    throw data;
}